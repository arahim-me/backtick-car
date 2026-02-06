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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(LanguageController $language)
    {
        $language->language();
        $title = "My Listing || Dashboard";
        $active = Status::where('name', 'active')->first();
        $sold = Status::where('name', 'sold')->first();
        $lists = Listing::where('user_id', auth()->user()->id)->latest()->paginate(10);
        $lists_count = Listing::all();
        return view('dashboard.listing.index', compact('lists', 'lists_count', 'title'));
    }
    public function add_listing(LanguageController $language)
    {
        $language->language();
        $title = "Add New Listing || Dashboard";
        $categories = Categories::latest()->get();
        $brands = Brands::all();
        $features = Features::all();
        $conditions = Condition::all();

        return view('dashboard.listing.addlisting', compact(['title', 'categories', 'brands', 'features', 'conditions']));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'lang' => 'required',
            'model' => 'required',
            'price' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg,gif',
            'image' => 'required|max:10|min:2',
            'features' => 'required|min:2',
        ]);

        $condition = Condition::where('name', $request->condition)->first();
        $brand = Brands::where('name', $request->brand_name)->first();
        $isExistModel = Models::where('id', $request->model)->first();
        if (!$isExistModel) {
            $model = Models::create([
                'name' => $request->model,
                'brand_id' => $request->brand_name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $model = $isExistModel->id;
        }

        $manager = new ImageManager(new Driver());
        if ($request) {
            $last_list = Listing::latest()->first();
            $last_item = $last_list ? $last_list->id : 1;
            $images_path = 'public/uploads/products/images/';
            $thumb_path = 'public/uploads/products/thumbnails/';

            // return $request;
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->thumbnail;
                $image = $manager->read($thumbnail);
                $image_name = 'uid-' . auth()->user()->id . '- ' . 'post-id' . '-' . $last_item . '-' . now() . '-' . rand(10, 100) . '.' . $thumbnail->getClientOriginalExtension();
                $image->scale(500);
                // $image->toPng()->save(base_path($thumb_path . $image_name));
                // move_uploaded_file($thumbnail, $thumb_path . $image_name);
                $thumbnail_name = $image_name;



                $files = $request->image;
                foreach ($files as $file) {
                    $image = $manager->read($file);
                    $image_name = 'uid-' . auth()->user()->id . '- ' . 'post-id' . '-' . $last_item . '-' . now() . '-' . rand(10, 100) . '.' . $file->getClientOriginalExtension();
                    $image->scale(500);
                    // $image->toPng()->save(base_path($images_path . $image_name));
                    $imgData[] = $image_name;
                }

                Listing::create([
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'lang' => $request->lang,
                    'title' => $request->title,
                    'slug' => str::slug($request->title),
                    'model_id' => $model,
                    'brand_id' => $brand->id,
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
                    'features' => json_encode($request->features),
                    'price' => $request->price,
                    'currency' => $request->currency,
                    'thumbnail' => $thumbnail_name,
                    'image' => json_encode($imgData),
                    'video' => $request->video,
                ]);
                toast('Successfully Created Your List!', 'success');
                return redirect('/dashboard/listing');
            } else {
                Listing::create([
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'lang' => $request->lang,
                    'title' => $request->title,
                    'slug' => str::slug($request->title),
                    'model' => $request->model,
                    'brand_id' => $brand->id,
                    'year' => $request->year,
                    'condition_id' => $condition->id,
                    'model_id' => $model,
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
                    'features' => json_encode($request->features),
                    'price' => $request->price,
                    'currency' => $request->currency,
                    'video' => $request->video,
                ]);
                toast('Successfully Created Your List!', 'success');
                return redirect('/dashboard/listing');
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
            ->where('status', 'active')->get();
        $title = $list->title . ' || ' . $list->model . '||' . $list->brand_name;
        return view('dashboard.listing.listing_details', compact('title', 'list', 'reviews'));
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
                'user_id' => auth()->user()->id,
                'parent_id' => $parent->id,
                'category_id' => $parent->category_id,
                'lang' => $request->lang,
                'title' => $request->title,
                'slug' => str::slug($request->title),
                'model_id' => $request->model,
                'brand_id' => $request->brand_name,
                'year' => $parent->year,
                'condition_id' => $request->condition,
                'stock_numger' => $parent->stock_number,
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
                'features' => $parent->features,
                'price' => $request->price,
                'currency' => $currency,
                'thumbnail' => $parent->thumbnail,
                'image' => $parent->image,
                'video' => $parent->video,
            ]);
            toast('Successfully Converted Your List!', 'success');
            return redirect('/dashboard/listing');
        } else {
            toast('Failed to converted the list!', 'error');
            return redirect('/dashboard/listing');
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
        $manager = new ImageManager(new Driver());
        if ($request->thumbnail) {
            $path = 'public/uploads/products/thumbnails/';
            $old_image = Listing::where('id', $id)->first();
            $image = $manager->read($request->file('thumbnail'));
            $image->scale(500);
            $image_name = 'uid-' . auth()->user()->id . '-' . 'post-id-' . $old_image->id . '-' . now() . '-' . rand(10, 100) . '.' . $request->file('thumbnail')->getClientOriginalExtension();

            if (file_exists(base_path($path . $old_image->thumbnail))) {
                unlink(base_path($path . $old_image->thumbnail));
                $image->toPng()->save(base_path($path . $image_name));
            } else {
                $image->toPng()->save(base_path($path . $image_name));
            }
            Listing::find($id)->update([
                'title' => $request->title,
                'slug' => str::slug($request->title),
                'model' => $request->model,
                'brand_name' => $request->brand_name,
                'type' => $request->type,
                'year' => $request->year,
                'condition' => $request->condition,
                'stock_numger' => $request->stock_number,
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
                'features' => json_encode($request->features),
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
                'model' => $request->model,
                'brand_name' => $request->brand_name,
                'type' => $request->type,
                'year' => $request->year,
                'condition' => $request->condition,
                'stock_numger' => $request->stock_number,
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
                'features' => json_encode($request->features),
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
