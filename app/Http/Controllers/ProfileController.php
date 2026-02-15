<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Session;



class ProfileController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = "Profile Update || Dashboard";
        return view('dashboard.profile.index', compact('title'));
    }

    public function profile_update(Request $request)
    {
        $oldname = auth()->user()->name;
        if ($request->name && $request->email && $request->phone && $request->location && $request->description) {
            User::find(auth()->id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'location' => $request->location,
                'description' => $request->description,
                'updated_at' => now(),
            ]);
            toast('Information Successfully updated', 'success');
            return redirect()->back();
        } elseif ($request->name || $request->email || $request->phone || $request->location || $request->description) {
            User::find(auth()->id())->update([
                'name' => $request->name ? $request->name : $oldname,
                'email' => $request->email ? $request->email : auth()->user()->email,
                'phone' => $request->phone ? $request->phone : auth()->user()->phone,
                'location' => $request->location ? $request->location : auth()->user()->location,
                'description' => $request->description ? $request->description : auth()->user()->description,
                'updated_at' => now(),
            ]);
            toast('Information Successfully updated', 'success');
            return redirect()->back();
        } elseif ($request->name) {
            User::find(auth()->id())->update([
                'name' => $request->name,
                'updated_at' => now(),
            ]);
            toast('Name Successfully updated', 'success');
            return redirect()->back();
        } elseif ($request->email) {
            User::find(auth()->id())->update([
                'email' => $request->email,
                'updated_at' => now(),
            ]);
            toast('E-Mail Successfully updated', 'success');
            return redirect()->back();
        } elseif ($request->phone) {
            User::find(auth()->id())->update([
                'phone' => $request->phone,
                'updated_at' => now(),
            ]);
            toast('Phone Number Successfully updated', 'success');
            return redirect()->back();
        } elseif ($request->location) {
            User::find(auth()->id())->update([
                'location' => $request->location,
                'updated_at' => now(),
            ]);
            toast('Location Successfully updated', 'success');
            return redirect()->back();
        } elseif ($request->description) {
            User::find(auth()->id())->update([
                'description' => $request->description,
                'updated_at' => now(),
            ]);
            toast('Description Successfully updated', 'success');
            return redirect()->back();
        } else {
            toast('Nothing updated', 'error');
            return redirect()->back();
        }
    }
    //Update profile picture
    public function profile_update_image(Request $request)
    {
        $user = auth()->user();
        $manager = new ImageManager(new Driver());
        $image = $manager->read($request->file('image'));
        $path = 'public/uploads/profiles/';
        $oldImg = auth()->user()->image;
        $image_name = $user->id . '-' . time() . '-' . rand(10, 100) . '.' . $request->file('image')->getClientOriginalExtension();
        // Create directory if it does not exist
        if (!is_dir(base_path($path))) {
            mkdir(base_path($path), 0755, true);
        }
        if ($request->hasFile('image')) {
            $image->scale(200);
            if (file_exists(base_path($path . $oldImg))) {
                unlink(base_path($path . $oldImg));
                $image->save(base_path($path . $image_name));
            } else {
                $image->save(base_path($path . $image_name));
            }
            $updated = $user::find(
                $user->id
            )->update([
                        'image' => $image_name,
                        'updated_at' => now(),
                    ]);
            if ($updated) {
                toast('Image Successfully updated', 'success');
                return redirect()->back();
            } else {
                toast('Image could not updated', 'error');
                return redirect()->back();
            }
        }
    }

    public function language(Request $request)
    {
        if (auth()->check()) {
            User::find(auth()->id())->update(['lang' => $request->lang]);
            Session::put('local', $request->lang);
            toast('Your Language updated successful!', 'success');
            return redirect()->back();
        } else {
            Session::put('local', $request->lang);
            toast('Your Language updated successful!', 'success');
            return redirect()->back();
        }

    }

}
