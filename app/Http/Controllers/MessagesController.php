<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Toaster;
use App\Models\Messages;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function message_store(Request $request)
    {

        if ($request) {
            Messages::create([
                'sender'=> auth()->user()->id,
                'email'=> auth()->user()->email,
                'phone'=> $request->phone,
                'subject'=> $request->subject,
                'body'=> $request->body,
            ]);
            toast('valo', 'success');
            return back();
        } else {
            toast('kharap', 'error');
            return 'kharap';
        }

    }

    public function index(LanguageController $language)
    {
        $language->language();
        $title = "Messages || Dashboard";
        $messages = Messages::latest()->paginate(5);
        return view('dashboard.messages.index', compact('messages', 'title'));
    }
}
