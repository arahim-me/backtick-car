<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\Status;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Sellers';
        $statuses = Status::all();
        $sellers = Seller::all();
        return view('dashboard.seller.index', compact(['title', 'statuses', 'sellers']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $isSeller = auth()->user()->role->name === 'seller';
        $isSubmitted = Seller::where('user_id', auth()->id())->exists();
        if (!$isSeller && !$user->name || !$user->email || !$user->phone || !$user->location || !$user->description) {
            $error = 'Please update your profile information before registering as a seller.';
            toast($error, 'error');
            return redirect()->route('profile');
        } else if ($isSubmitted) {
            $error = 'You have already submitted a seller registration request. Please wait for approval.';
            toast($error, 'error');
            return redirect()->route('profile');
        } else if ($isSeller) {
            $error = 'You are already registered as a seller.';
            toast($error, 'error');
            return redirect()->route('profile');
        } else {
            $title = 'Seller Registration';
            return view('dashboard.seller.register', compact('title'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pendingStatus = Status::where('name', 'pending')->first();


        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'fax' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'social_media' => 'nullable|url',
            'registration_number' => 'nullable|string|max:255',
            'tax_number' => 'nullable|string|max:255',
            'used_cars_license_number' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'bank.name' => 'nullable|string|max:255',
            'bank.account_number' => 'nullable|string|max:255',
            'bank.branch' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'nullable|string',
        ]);
        $bankAccount = [
            'name' => $request['bank']['name'] ?? null,
            'account_number' => $request['bank']['account_number'] ?? null,
            'branch' => $request['bank']['branch'] ?? null,
        ];
        // dd($validate, $pendingStatus);
        $created = Seller::create([
            'user_id' => auth()->id(),
            'status_id' => $pendingStatus->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'website' => $request->website,
            'social_media_links' => $request->social_media,
            'registration_number' => $request->registration_number,
            'tax_number' => $request->tax_number,
            'used_cars_license_number' => $request->used_cars_license_number,
            'bank_account' => $bankAccount,
            'description' => $request->description,
            'logo' => $request->logo,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if ($created) {
            $success = 'Your seller registration request has been submitted successfully. Please wait for approval.';
            toast($success, 'success');
            return redirect()->route('profile');
        } else {
            $error = 'There was an error submitting your seller registration request. Please try again.';
            toast($error, 'error');
            return redirect()->back();
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    //View Seller Registration Requests
    public function request()
    {
        $title = 'Seller Registration Request';
        $pendingStatus = Status::where('name', 'requested')->first();
        $sellers = Seller::where('status_id', $pendingStatus->id)->get();
        return 'hello';
        // return view('dashboard.seller.request', compact(['title', 'sellers']));
        // return 'hello';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
