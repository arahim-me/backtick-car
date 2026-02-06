<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    // Categories Index page redirect
    public function index()
    {
        $title = 'Features';
        $features = Features::all();
        return view('dashboard.features.index', compact(['title', 'features']));
    }

    // Features Create Page
    public function create()
    {
        $title = 'Create new Feature';
        return view('dashboard.features.create', compact('title'));
    }
    // Features Store
    public function store(Request $request)
    {

        $created = Features::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'status' => 'deactive',
            'created_at' => now(),
            'updated_at' => now(),
            // 'image' => $image_name
        ]);
        if ($created) {
            toast('Category created successful!', 'success');
            return redirect(route('dashboard.features.index'));
        }

    }
    // Features Edit Page
    public function edit($id)
    {
        $title = 'Edit Feature';
        return view('dashboard.features.edit', compact(['id', 'title']));
    }
    // Features Update
    public function update($id, Request $request)
    {
        $updated = Features::find($id)->update([
            'name' => $request->name,
            'updated_at' => now(),
        ]);
        if ($updated) {
            toast('Category Status updated successfull!', 'success');
            return redirect(route('categories.index'));
        }
    }
    // Features status update
    public function update_status($id)
    {
        $status = Features::where('id', $id)->first();
        $updated = Features::find($id)->update([
            'status' => $status->status == 'active' ? 'deactive' : 'active',
            'updated_at' => now(),
        ]);
        if ($updated) {
            toast('Feature Status updated successfull!', 'success');
            return redirect()->back();
        }
    }
    // Features Destroy
    public function destroy($id)
    {
        $deleted = Features::find($id)->delete();
        if ($deleted) {
            toast('Category deleted successfull!', 'success');
            return redirect()->back();
        }
    }
}
