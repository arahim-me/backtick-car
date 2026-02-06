<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Condition;
use App\Models\Listing;
use App\Models\Models;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    // Query by category
    public function query_by_category($id)
    {
        $title = 'Show Search Results!';
        $cars = Listing::where('status_id', '1')->where('lang', app()->getLocale())->where('category_id', $id)->latest()->paginate(15);
        return view('frontend.car.index', compact('cars', 'title'));
    }
    public function query_by_brand($id)
    {
        $title = 'Show Search Results!';
        $cars = Listing::where('status_id', '1')->where('lang', app()->getLocale())->where('brand_id', $id)->latest()->paginate(15);
        return view('frontend.car.index', compact('cars', 'title'));
    }
    public function query_by_model($id)
    {
        $title = 'Show Search Results!';
        $cars = Listing::where('status_id', '1')->where('lang', app()->getLocale())->where('model_id', $id)->latest()->paginate(15);
        return view('frontend.car.index', compact('cars', 'title'));
    }
    public function query_by_condition($condition)
    {
        $condition = Condition::where('name', $condition)->first();
        $id = $condition->id;
        $title = 'Show Search Results!';
        $cars = Listing::where('status_id', '1')->where('lang', app()->getLocale())->where('condition_id', $id)->latest()->paginate(15);
        return view('frontend.car.index', compact('cars', 'title'));
    }
    // Query by search
    public function search(Request $request, LanguageController $language)
    {
        $language->language();
        $title = 'Show Search Results!';
        $cars = Listing::where('lang', session()->get('local'))->where('brand_name', 'like', "%$request->search%")->orWhere('title', 'like', "%$request->search%")->orWhere('model', 'like', "%$request->search%")->paginate(15);
        return view('frontend.car.index', compact('cars', 'title'));
    }
    /**
     * Get models by brand (used in add listing brand selection)
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function model_query_by_brand(Request $request)
    {
        $brandId = $request->brand_id ?? $request->brand_name;

        $brand = Brands::find($brandId);

        if (!$brand) {
            return response()->json(['models' => [], 'error' => 'Brand not found'], 404);
        }

        $models = Models::where('brand_id', $brand->id)->latest()->get();

        return response()->json(['models' => $models]);
    }
}
