<?php

namespace App\Http\Controllers\FrontEnd;

use App;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use App\Models\Listing;
use App\Models\Review;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = "Show All Car";
        $cars = Listing::where('lang', session()->get('local'))->latest()->paginate(15);
        return view('frontend.car.index', compact('cars', 'title'));
    }
    public function listing_details($id, LanguageController $language)
    {
        $language->language();
        $list = Listing::where('id', $id)->first();
        // $views = $list->views;
        $reviews = Review::where('product_id', $id)
            ->where('status_id', 1)->get();
        $cars = Listing::orderBy('views', 'desc')->limit(5)->get();
        $title = $list->title . ' || ' . $list->model;
        Listing::find($id, 'id')->update([
            'views' => $list->views == null ? $list->views + 1 : $list->views + 1,
            'updated_at' => now(),
        ]);
        return view('dashboard.listing.listing_details', compact('list', 'cars', 'title', 'reviews'));
    }

}
