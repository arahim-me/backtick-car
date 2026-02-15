<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = auth()->user();
        $roles = Role::all();
        $statuses = Status::all();

        if ($auth->role == 'admin') {
            $title = "Users";
            $users = User::paginate(50);
            return view('dashboard.users.index', compact(['title', 'users', 'roles','statuses']));
        } elseif ($auth->role == 'manager') {
            $title = "Users";
            $admin = Role::where('name', 'admin')->first();
            $users = User::whereNot('role_id', $admin->id)->paginate(50);
            return view('dashboard.users.index', compact(['title', 'users', 'roles','statuses']));
        } else {
            $title = "Users";
            $users = User::all();
            return view('dashboard.users.index', compact(['title', 'users', 'roles','statuses']));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'hello';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'hello';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'hello';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'hello';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'hello';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'hello';
    }
    public function query(Request $request)
    {
        $title = "Show Search Result";
        $statuses = Status::all();
        $roles = Role::all();

        if ($request->user_search) {
            $users = User::where('name', 'like', "%$request->user_search%")->orWhere('email', 'like', "%$request->user_search%")->get();
            return view('dashboard.users.index', compact(['users', 'roles', 'title', 'statuses']));
        } elseif ($request->user_role) {
            $role = Role::where('name', $request->user_role)->first();
            $users = User::where('role_id', $role->id)->paginate(50);
            return view('dashboard.users.index', compact(['users', 'roles', 'title', 'statuses']));
        } elseif ($request->user_status) {
            $status = Status::where('name', $request->user_status)->first();
            $users = User::where('status_id', $status->id)->paginate(50);
            return view('dashboard.users.index', compact(['users', 'roles', 'title', 'statuses']));
        }
    }
}
