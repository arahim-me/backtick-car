<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $title = 'Orders';
        if ($user->role->id == 1 || $user->role->id == 2) {
            $orders = Orders::latest()->get();
            return view('dashboard.orders.index', compact(['title', 'orders']));
        } else {
            $orders = Orders::where('seller_id', $user->id)->latest()->get();
            return view('dashboard.orders.index', compact(['title', 'orders']));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$title = 'Create Order';
        //$sellers = User::where('role_id', 2)->get();
        //$customers = User::where('role_id', 3)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
