<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\LanguageController;

class BrandsController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = 'Brands';
        $brands = Brands::all();

        return view('dashboard.brands.index', compact(['title', 'brands']));
    }
    public function create(LanguageController $language)
    {
        $language->language();
        $title = 'Create New Brand';
        return view('dashboard.brands.create', compact('title'));
    }
    // Categories Store
    public function store(Request $request)
    {

        $isExist = Brands::where('name', $request->name)->first();
        if ($isExist) {
            toast('Brand already exists. Please choose a different name.', 'error');
            return back()->withInput();
        }

        $validated = $request->validate([
            'name' => 'required|string|max:25|unique:brands,name',
        ]);
        $created = Brands::create([
            // 'user_id' => auth()->user()->id,
            'name' => $validated['name'],
            // 'status' => 'deactive',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if ($created) {
            toast('Successfully Created Brand!', 'success');
            return redirect(route('brands.index'));
        } else {
            toast('Failed to create brand. Please try again.', 'error');
            return back();
        }
    }
    // Categories Edit Page
    public function edit($id)
    {
        $title = 'Edit Brand';
        $brand = Brands::where('id', $id)->first();
        return view('dashboard.brands.edit', compact(['title', 'brand']));
    }
    // Categories Update
    public function update(Request $request, $id)
    {
        // Prevent updating system brands (IDs 1-8)
        if ($id <= 8) {
            return back()->withErrors(['brand' => 'Editing system brands is disabled.']);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:25|unique:brands,name,' . $id,
        ]);

        $isExist = Brands::where('name', $validated['name'])->where('id', '!=', $id)->first();

        if ($isExist) {
            toast('Brand already exists. Please choose a different name.', 'error');
            return back()->withInput();
        }

        $brand = Brands::findOrFail($id);
        $brand->name = $validated['name'];
        $brand->updated_at = now();
        $updated = $brand->save();

        if ($updated) {
            toast('Brand updated successfully!', 'success');
            return redirect(route('brands.index'));
        }

        return back()->withInput()->withErrors(['brand' => 'Failed to update brand.']);
    }
    // Brand status update
    public function update_status($id)
    {
        $status = Brands::where('id', $id)->first();
        $updated = Brands::find($id)->update([
            'status' => $status->status == 'active' ? 'deactive' : 'active',
            'updated_at' => now()
        ]);
        if ($updated) {
            toast('Brand Status updated successfull!', 'success');
            return redirect()->back();
        }
    }
    // Brand Destroy
    public function destroy($id)
    {
        // Prevent deletion of system brands (IDs 1-8)
        if ($id <= 8) {
            toast()->error('Cannot delete system brand.');
            return redirect()->back();
        }

        $deleted = Brands::find($id)->delete();
        if ($deleted) {
            toast('Brand deleted successfully!', 'success');
            return redirect()->back();
        }
    }
}
