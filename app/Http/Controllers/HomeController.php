<?php

namespace App\Http\Controllers;


use App;
use App\Models\Favorites;
use App\Models\Listing;
use App\Models\Review;
use App\Models\Status;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(LanguageController $language)
    {
        $language->language();
        $title = 'Home || Dashboard';
        $active = Status::where('name', 'active')->first();
        $sold = Status::where('name', 'sold')->first();
        $user_reviews = Review::where('user_id', auth()->user()->id)->get();
        $user_favorites = Favorites::where('user_id', auth()->user()->id)->get();
        $lists = Listing::where('seller_id', auth()->user()->id)->where('status_id', $active->id)->orWhere('status_id', $sold->id)->latest()->paginate(5);
        return view('dashboard.home.index', compact('lists', 'title', 'user_favorites', 'user_reviews'));

    }
}
