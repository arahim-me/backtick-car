<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Condition;
use App\Models\Features;
use App\Models\Listing;
use App\Models\Models;
use App\Models\Review;
use App\Models\Status;
use Illuminate\Http\Request;
use Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\User;

class ListingController extends Controller
{
    public function index(LanguageController $language)
    {
        $user = auth()->user();
        $language->language();
        $title = "My Listing || Dashboard";
        $active = Status::where('id', 1)->first();
        $sold = Status::where('name', 'sold')->first();
        if ($user->id === 1) {
            $lists = Listing::paginate(50);
            return view('dashboard.listing.index', compact('lists', 'title'));
        } else {
            $lists = Listing::where('user_id', $user->id)->latest()->paginate(10);
            return view('dashboard.listing.index', compact('lists', 'title'));
        }
    }
    public function create(LanguageController $language)
    {
        $language->language();
        $title = "Add New Listing || Dashboard";
        $categories = Categories::latest()->get();
        $brands = Brands::all();
        $features = Features::all();
        $conditions = Condition::all();

        return view('dashboard.listing.create', compact(['title', 'categories', 'brands', 'features', 'conditions']));
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'title' => 'required',
            'lang' => 'required',
            'model' => 'required',
            'price' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg,gif',
            'image' => 'required|max:10|min:2',
            'features' => 'required|min:2',
        ]);

        // $condition = Condition::where('name', $request->condition)->first();
        // $brand = Brands::where('name', $request->brand_name)->first();
        $isExistModel = Models::where('name', $request->model)->first();
        if (!$isExistModel) {
            $modelCreated = Models::create([
                'name' => $request->model,
                'brand_id' => $request->brand_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $model = $modelCreated->id;
        } else {
            $model = $isExistModel->id;
        }
        foreach ($request->features as $feature) {
            $features[] = $feature;
        }
        // dd($features);


        $manager = new ImageManager(new Driver());
        if ($request) {
            $last_list = Listing::latest()->first();
            $last_item = $last_list ? $last_list->id : 1;
            $images_path = 'public/uploads/products/images/';
            $thumb_path = 'public/uploads/products/thumbnails/';

            // Create directories if they do not exist
            if (!is_dir(base_path($images_path))) {
                mkdir(base_path($images_path), 0755, true);
            }
            if (!is_dir(base_path($thumb_path))) {
                mkdir(base_path($thumb_path), 0755, true);
            }


            $request->validate([
                'title' => 'required|string|max:400',
                'thumbnail' => 'required',
                'image' => 'required|array|min:2',
                'features' => 'required|array|min:5'
            ]);
            // return $request;
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->thumbnail;
                $image = $manager->read($thumbnail);
                $image_name = $user->id . $last_item . '-' . time() . '-' . rand(10, 100) . '.' . $thumbnail->getClientOriginalExtension();
                $image->scale(500);
                $image->save(base_path($thumb_path . $image_name));
                $thumbnail_name = $image_name;

                $files = $request->image;
                foreach ($files as $file) {
                    $image = $manager->read($file);
                    $image_name = 'uid-' . auth()->user()->id . '-post-id-' . $last_item . '-' . time() . '-' . rand(10, 100) . '.' . $file->getClientOriginalExtension();
                    $image->scale(500);
                    $image->save(base_path($images_path . $image_name));
                    $imgData[] = $image_name;
                }

                Listing::create([
                    'seller_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'lang' => $request->lang,
                    'title' => $request->title,
                    'slug' => str::slug($request->title),
                    'model_id' => $model,
                    'brand_id' => $request->brand_id,
                    'year' => $request->year,
                    'condition_id' => $request->condition_id,
                    'stock_number' => $request->stock_number,
                    'mileage' => $request->mileage,
                    'transmision' => $request->transmision,
                    'driver_type' => $request->driver_type,
                    'engine_size' => $request->engine_size,
                    'cylinders' => $request->cylinders,
                    'fuel_type' => $request->fuel_type,
                    'doors' => $request->doors,
                    'color' => $request->color,
                    'seats' => $request->seats,
                    'tyer_type' => $request->tyer_type,
                    'weight' => $request->weight,
                    'dimension' => $request->dimension,
                    'description' => $request->description,
                    'features_id' => json_encode($features),
                    'price' => $request->price,
                    'currency' => $request->currency,
                    'status_id' => 1,
                    'thumbnail' => $thumbnail_name,
                    'image' => json_encode($imgData),
                    'video' => $request->video,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                toast('Successfully Created Your List!', 'success');
                return redirect('/dashboard/listing');
            } else {
                Listing::create([
                    'seller_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'lang' => $request->lang,
                    'title' => $request->title,
                    'slug' => str::slug($request->title),
                    'model_id' => $request->model,
                    'brand_id' => $request->brand_id,
                    'year' => $request->year,
                    'condition_id' => $request->condition_id,
                    'mileage' => $request->mileage,
                    'transmision' => $request->transmision,
                    'driver_type' => $request->driver_type,
                    'engine_size' => $request->engine_size,
                    'cylinders' => $request->cylinders,
                    'fuel_type' => $request->fuel_type,
                    'doors' => $request->doors,
                    'color' => $request->color,
                    'seats' => $request->seats,
                    'tyer_type' => $request->tyer_type,
                    'weight' => $request->weight,
                    'dimension' => $request->dimension,
                    'description' => $request->description,
                    'features_id' => json_encode($features),
                    'price' => $request->price,
                    'currency' => $request->currency,
                    'status_id' => 1,
                    'video' => $request->video,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                toast('Successfully Created Your List!', 'success');
                return redirect()->route('car.index');
            }

        } else {
            toast('Please Enter Data Properly!', 'error');
            return back();
        }
    }
    // public function add_car_by_lang($lang)
    // {
    //     return 'hello';
    // }
    public function listing_details($id, LanguageController $language)
    {
        $language->language();
        $list = Listing::where('id', $id)->first();
        $reviews = Review::where('product_id', $id)
            ->where('status_id', 1)->get();
        $title = $list->title . ' || ' . $list->model->name . '||' . $list->brand->name;
        return view('dashboard.listing.listing_details', compact(['title', 'list', 'reviews']));
    }
    //Status changed to sold
    public function sold($id)
    {
        $status = Listing::where('id', $id)->first();
        if ($status->status->name == 'active') {
            Listing::find($id)->update([
                'status' => 'sold',
                'updated_at' => now(),
            ]);
            toast('Successfully Updated status of this post into Sold!', 'success');
            return back();
        } else {
            Listing::find($id)->update([
                'status' => 'active',
                'updated_at' => now(),
            ]);
            toast('Successfully Updated status of this post into In Stock!', 'success');
            return back();
        }

    }
    //Converting another language
    public function convert_lang($id, $lang)
    {
        $title = 'Convert to another language';
        $car = Listing::where('id', $id)->first();
        $categories = Categories::latest()->get();
        return view('dashboard.listing.convert', compact('car', 'title', 'lang', 'id', 'categories'));
    }
    // Store to converted language
    public function convert_listing($id, Request $request)
    {
        // $condition = Condition::where('name', $request->condition)->first();
        $parent = Listing::where('id', $id)->first();
        if ($request->lang == 'ja') {
            $currency = 'yen';
        } elseif ($request->currency == 'bn') {
            $currency = 'bdt';
        } else {
            $currency = 'usd';
        }
        if ($request) {
            Listing::create([
                'seller_id' => auth()->user()->id,
                'parent_id' => $parent->id,
                'category_id' => $parent->category_id,
                'lang' => $request->lang,
                'title' => $request->title,
                'slug' => str::slug($request->title),
                'model_id' => $request->model,
                'brand_id' => $request->brand_name,
                'year' => $parent->year,
                'condition_id' => $request->condition_id,
                'stock_number' => $parent->stock_number,
                'mileage' => $parent->mileage,
                'transmision' => $parent->transmision,
                'driver_type' => $parent->driver_type,
                'engine_size' => $parent->engine_size,
                'cylinders' => $parent->cylinders,
                'fuel_type' => $request->fuel_type,
                'doors' => $parent->doors,
                'color' => $parent->color,
                'seats' => $parent->seats,
                'tyer_type' => $parent->tyer_type,
                'weight' => $parent->weight,
                'dimension' => $parent->dimension,
                'description' => $request->description,
                'features_id' => $parent->features_id,
                'price' => $request->price,
                'currency' => $currency,
                'thumbnail' => $parent->thumbnail,
                'image' => $parent->image,
                'video' => $parent->video,
                'updated_at' => now(),
            ]);
            toast('Successfully Converted Your List!', 'success');
            return redirect()->route('car.index');
        } else {
            toast('Failed to converted the list!', 'error');
            return redirect()->route('car.index');
        }

    }
    // Edit the list
    public function edit($id, LanguageController $language)
    {
        $language->language();
        $title = 'Edit Listing';
        $car = Listing::where('id', $id)->first();
        $categories = Categories::latest()->get();
        $brands = Brands::all();
        $statuses = Status::all();

        return view('dashboard.listing.edit', compact('car', 'title', 'categories', 'brands', 'statuses'));
    }
    // Update the list
    public function update(Request $request, $id)
    {
        $user = auth()->user();

        $condition = Condition::where('name', $request->condition)->first();
        $manager = new ImageManager(new Driver());
        if ($request->thumbnail) {
            $path = 'public/uploads/products/thumbnails/';
            // Create directory if it does not exist
            if (!is_dir(base_path($path))) {
                mkdir(base_path($path), 0755, true);
            }
            $old_image = Listing::where('id', $id)->first();
            $image = $manager->read($request->file('thumbnail'));
            $image->scale(500);
            $image_name = $user->id . $old_image->id . '-' . time() . '-' . rand(10, 100) . '.' . $request->file('thumbnail')->getClientOriginalExtension();

            if (file_exists(base_path($path . $old_image->thumbnail))) {
                unlink(base_path($path . $old_image->thumbnail));
                $image->toPng()->save(base_path($path . $image_name));
            } else {
                $image->toPng()->save(base_path($path . $image_name));
            }
            Listing::find($id)->update([
                'title' => $request->title,
                'slug' => str::slug($request->title),
                'model_id' => $request->model,
                'brand_id' => $request->brand_name,
                'type' => $request->type,
                'year' => $request->year,
                'condition_id' => $condition->id,
                'stock_number' => $request->stock_number,
                'mileage' => $request->mileage,
                'transmision' => $request->transmision,
                'driver_type' => $request->driver_type,
                'engine_size' => $request->engine_size,
                'cylinders' => $request->cylinders,
                'fuel_type' => $request->fuel_type,
                'doors' => $request->doors,
                'color' => $request->color,
                'seats' => $request->seats,
                'tyer_type' => $request->tyer_type,
                'weight' => $request->weight,
                'dimension' => $request->dimension,
                'description' => $request->description,
                'features_id' => json_encode($request->features),
                'price' => $request->price,
                'thumbnail' => $image_name,
                'video' => $request->video,
                'updated_at' => now()
            ]);
            toast('Successfully Updated Your Car List!', 'success');
            return redirect()->back();
        } else {
            Listing::find($id)->update([
                'title' => $request->title,
                'slug' => str::slug($request->title),
                'model_id' => $request->model,
                'brand_id' => $request->brand_name,
                'type' => $request->type,
                'year' => $request->year,
                'condition_id' => $condition->id,
                'stock_number' => $request->stock_number,
                'mileage' => $request->mileage,
                'transmision' => $request->transmision,
                'driver_type' => $request->driver_type,
                'engine_size' => $request->engine_size,
                'cylinders' => $request->cylinders,
                'fuel_type' => $request->fuel_type,
                'doors' => $request->doors,
                'color' => $request->color,
                'seats' => $request->seats,
                'tyer_type' => $request->tyer_type,
                'weight' => $request->weight,
                'dimension' => $request->dimension,
                'description' => $request->description,
                'features_id' => json_encode($request->features),
                'price' => $request->price,
                'video' => $request->video,
                'updated_at' => now(),
            ]);
            toast('Successfully Updated Your Car List!', 'success');
            return redirect()->back();
        }
    }
    //Delete the Listing
    public function destroy($id)
    {
        $parent = Listing::where('id', $id)->first();
        if ($parent->parent_id) {
            $manager = new ImageManager(new Driver());
            $path = 'public/uploads/products/';
            $oldImg = Listing::where('id', $id)->first();
            if ($oldImg->image) {
                unlink(base_path($path . $oldImg->image));
                Listing::find($id)->delete();
                toast('Permanently Deleted the post!', 'warning');
                return back();
            } else {
                Listing::find($id)->delete();
                toast('Permanently Deleted the post!', 'warning');
                return back();
            }
        } else {
            Listing::find($id)->delete();
            toast('Successfully deleted this post!', 'warning');
        }
    }

}
