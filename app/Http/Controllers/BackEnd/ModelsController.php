<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of all models with brands
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $title = 'Models';
        $models = Models::latest()->get();
        $brands = Brands::all();
        return view('dashboard.models.index', compact(['title', 'models', 'brands']));
    }
    /**
     * Show the form for creating a new model
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title = 'Create New Model';
        $brands = Brands::all();
        return view('dashboard.models.create', compact(['title', 'brands']));
    }
    /**
     * Store a newly created model in the database
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50|unique:models,name',
            'brand_id' => 'required|integer|exists:brands,id',
        ]);

        $created = Models::create([
            'name' => $validated['name'],
            'brand_id' => $validated['brand_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($created) {
            toast('Successfully Created Model!', 'success');
            return redirect(route('models.index'));
        } else {
            toast('Failed to create model. Please try again.', 'error');
            return back();
        }
    }
    /**
     * Show the form for editing a specific model
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $title = 'Edit Model';
        $model = Models::where('id', $id)->first();
        $brands = Brands::all();
        return view('dashboard.models.edit', compact(['title', 'model', 'brands']));
    }
    /**
     * Update a specific model in the database
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50|unique:models,name,' . $id,
            'brand_id' => 'required|integer|exists:brands,id',
        ]);

        $updated = Models::where('id', $id)->update([
            'name' => $validated['name'],
            'brand_id' => $validated['brand_id'],
            'updated_at' => now(),
        ]);

        if ($updated) {
            toast('Successfully Updated Model!', 'success');
            return redirect(route('models.index'));
        } else {
            toast('Failed to update model. Please try again.', 'error');
            return back();
        }
    }
    /**
     * Display a specific model (not implemented)
     *
     * @param  int  $id
     * @return void
     */
    public function show($id)
    {
        //
    }
    /**
     * Filter and search models by name and/or brand
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function query(Request $request)
    {
        $title = 'Models';
        $brands = Brands::all();

        $q = $request->query('q');
        $brandId = $request->query('brand');

        $modelsQuery = Models::query();

        if (!empty($q)) {
            $modelsQuery->where('name', 'like', "%{$q}%");
        }

        if (!empty($brandId)) {
            $modelsQuery->where('brand_id', $brandId);
        }

        $models = $modelsQuery->latest()->get();

        return view('dashboard.models.index', compact(['title', 'models', 'brands']));
    }
    /**
     * Delete a specific model from the database
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = Models::where('id', $id)->delete();

        if ($deleted) {
            toast('Successfully Deleted Model!', 'success');
            return redirect(route('models.index'));
        } else {
            toast('Failed to delete model. Please try again.', 'error');
            return back();
        }
    }
}
