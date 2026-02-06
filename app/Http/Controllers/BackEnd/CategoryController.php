<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CategoryController extends Controller
{
    // Categories Index page redirect
    public function index()
    {
        $title = 'Categories';
        $categories = Categories::latest()->get();
        return view('dashboard.categories.index', compact('title', 'categories'));
    }

    // Categories Create Page
    public function create()
    {
        $title = 'Create new Category';
        return view('dashboard.categories.create', compact('title'));
    }
    // Categories Store
    public function store(Request $request)
    {
        $created = Categories::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'status_id' => 2, // Assuming status_id 2 is 'deactive'
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if ($created) {
            toast('Category created successful!', 'success');
            return redirect(route('categories.index'));
        }
    }
    // Categories Edit Page
    public function edit($id)
    {
        $title = 'Edit Category';
        $category = Categories::where('id', $id)->first();
        return view('dashboard.categories.edit', compact(['title', 'category']));
    }
    // Categories Update
    public function update($id, Request $request)
    {
        $updated = Categories::find($id)->update([
            'name' => $request->name,
            'updated_at' => now(),
        ]);
        if ($updated) {
            toast('Category Status updated successfull!', 'success');
            return redirect(route('categories.index'));
        }
    }
    // Categories status update
    public function update_status($id)
    {
        $status = Categories::where('id', $id)->first();
        $updated = Categories::find($id)->update([
            'status_id' => $status->status_id == 1 ? 2 : 1,
            'updated_at' => now()
        ]);
        if ($updated) {
            toast('Category Status updated successfull!', 'success');
            return redirect()->back();
        }
    }
    // Categories Destroy
    public function destroy($id)
    {
        $deleted = Categories::find($id)->delete();
        if ($deleted) {
            toast('Category deleted successfull!', 'success');
            return redirect()->back();
        }
    }
}
