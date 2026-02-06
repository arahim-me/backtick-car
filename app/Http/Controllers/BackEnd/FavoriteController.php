<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use App\Models\Favorites;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\User;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(LanguageController $language)
    {
        $language->language();
        $favorite_cars = Favorites::where('user_id', auth()->user()->id)->get();
        $title = 'My Favorite Car';
        return view('dashboard.favorite.index', compact('title', 'favorite_cars'));
    }
    //Create new favorite item
    public function store($id)
    {
        $favorites_count = Favorites::where('user_id', auth()->user()->id)->get();
        foreach ($favorites_count as $favorite) {
            if ($favorite->post_id == $id) {
                toast('Already exist this item', 'error');
                return back();
            }
        }
        if ($favorites_count->count() >= 5) {
            $favorites_count->get(0)->delete();
            $created = Favorites::create([
                'user_id' => auth()->user()->id,
                'post_id' => $id,
            ]);
        } else {
            $created = Favorites::create([
                'user_id' => auth()->user()->id,
                'post_id' => $id,
            ]);
        }

        if ($created) {
            toast('Successfully added!', 'success');
            return back();
        } else {
            toast('Added failed!', 'error');
            return back();
        }
    }

    //Delete existing favorite item
    public function destroy($id)
    {
        $deleted = Favorites::find($id, 'id')->delete();

        if ($deleted) {
            toast('Successfully deleted!', 'success');
            return back();
        } else {
            toast('Failed to delete', 'error');
            return back();
        }
    }

}
