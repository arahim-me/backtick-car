<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use App\Models\Exports;
use App\Models\Listing;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Str;
use User;

class ExportController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = 'Car Export';
        $export_lists_count = Exports::where('status', 'exported')->get();
        $proc_lists_count = Exports::where('status', 'processing')->get();
        $export_lists = Exports::where('status', 'exported')->latest()->paginate(5);
        $proc_lists = Exports::where('status', 'processing')->latest()->paginate(5);

        return view('dashboard.export.index', compact('title', 'export_lists_count', 'proc_lists_count', 'export_lists', 'proc_lists'));
    }
    public function add(LanguageController $language)
    {
        $language->language();
        $title = 'Add new';
        return view('dashboard.export.add', compact('title'));
    }
    public function store(Request $request)
    {
        $manager = new ImageManager(new Driver());
        if ($request) {
            if ($request->hasFile('image')) {
                $path = 'public/uploads/products/exports/';
                $image = $manager->read($request->file('image'));
                $image_name = 'uid-' . auth()->user()->id . '-' . now()->format('d-m-Y') . '-' . rand(10, 1000) . '.' . $request->file('image')->getClientOriginalExtension();
                $image->toPng()->save(base_path($path . $image_name));

                Exports::create([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'model' => $request->model,
                    'brand_name' => $request->brand_name,
                    'years' => $request->years,
                    'condition' => $request->condition,
                    'fuel_type' => $request->fuel_type,
                    'color' => $request->color,
                    'description' => $request->description,
                    'price' => $request->price,
                    'status' => $request->status,
                    'export_to' => $request->export_to,
                    'importer' => $request->importer,
                    'posted_by' => auth()->user()->id,
                    'image' => $image_name,
                ]);
                toast('Successfully Created Your Export Car List!', 'success');
                return back();
            } else {
                toast('You Cannot Enter without Image!', 'warning');
                return back();
            }
        }
    }
    public function edit($id, LanguageController $language)
    {
        $language->language();
        $title = 'Edit Export Car';
        $car = Exports::where('id', $id)->first();
        return view('dashboard.export.edit', compact('title', 'car'));
    }
    public function update(Request $request, $id)
    {

        $manager = new ImageManager(new Driver());
        if ($request->image) {
            $path = 'public/uploads/products/exports/';
            $old_image = Listing::where('id', $id)->first();
            $image = $manager->read($request->file('image'));
            $image_name = 'uid-' . auth()->user()->id . '-' . now()->format('d-m-Y') . '-' . rand(10, 1000) . '.' . $request->file('image')->getClientOriginalExtension();

            if (file_exists(base_path($path . $old_image->image))) {
                unlink(base_path($path . $old_image->image));
                $image->toPng()->save(base_path($path . $image_name));
            } else {
                $image->toPng()->save(base_path($path . $image_name));
            }
            Exports::find($id)->update([
                'title' => $request->title,
                'model' => $request->model,
                'brand_name' => $request->brand_name,
                'years' => $request->years,
                'condition' => $request->condition,
                'fuel_type' => $request->fuel_type,
                'color' => $request->color,
                'description' => $request->description,
                'price' => $request->price,
                'status' => $request->status,
                'export_to' => $request->export_to,
                'importer' => $request->importer,
                'posted_by' => auth()->user()->id,
                'image' => $image_name,
                'updated_at' => now()
            ]);
            toast('Successfully Updated Your Export Car List!', 'success');
            return back();
        } else {
            Exports::find($id)->update([
                'title' => $request->title,
                'model' => $request->model,
                'brand_name' => $request->brand_name,
                'years' => $request->years,
                'condition' => $request->condition,
                'fuel_type' => $request->fuel_type,
                'color' => $request->color,
                'description' => $request->description,
                'price' => $request->price,
                'status' => $request->status,
                'export_to' => $request->export_to,
                'importer' => $request->importer,
                'posted_by' => auth()->user()->id,
                'updated_at' => now()
            ]);
            toast('Successfully Updated Your Export Car List!', 'success');
            return back();
        }
    }
}
