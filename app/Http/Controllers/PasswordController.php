<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(LanguageController $language)
    {
        $language->language();
        $title = "Password Update || Dashboard";
        return view('dashboard.password.index', compact('title'));
    }
    public function profile_update_password(Request $request)
    {

        if ($request->password) {
            $request->validate([
                'c_pass' => 'required',
                'password' => 'required|confirmed',
            ]);

            if (Hash::check($request->c_pass, auth()->user()->password)) {
                User::find(auth()->user()->id)->update([
                    'password' => $request->password,
                    'updated_at' => now(),
                ]);
                toast('Password successfully updated!', 'success');
                return back();
            } else {
                Alert::error('Wrong Password!');
                return back();
            }

        } else {
            Alert::warning('Enter password to update');
            return redirect()->back();
        }
    }
}
