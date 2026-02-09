<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $title = 'Roles';
        $roles = Role::all();
        if ($user->role->id <= 4) {
            return view('dashboard.roles.index', compact(['title', 'roles']));
        } else {
            toast('You are not authorized to view this page.', 'error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Role';
        $permissions = Permission::all();
        return view('dashboard.roles.create', compact(['permissions', 'title']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:25|unique:roles,name',
            'permissions' => 'sometimes|array',
            'permissions.*' => 'integer|exists:permissions,id',
        ]);

        try {
            $role = Role::create(['name' => $validated['name']]);

            if (!empty($validated['permissions'])) {
                $role->permissions()->sync($validated['permissions']);
            }

            return redirect()->route('roles.index')->with('success', 'Role created successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            // handle duplicate or other DB errors gracefully
            return back()->withInput()->withErrors(['name' => 'Role name must be unique.']);
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
    public function edit(Role $role)
    {
        $title = 'Edit Role';
        $permissions = Permission::all();
        return view('dashboard.roles.edit', compact(['role', 'permissions', 'title']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'permissions' => 'sometimes|array',
            'permissions.*' => 'integer|exists:permissions,id',
        ]);

        try {
            $role->update(['name' => $validated['name']]);

            if (array_key_exists('permissions', $validated)) {
                $role->permissions()->sync($validated['permissions']);
            }

            return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            toast()->error('Role name must be unique.');
            return redirect()->back();
        }
    }

    /**
     * Update the status of the specified resource.
     */
    public function update_status($id)
    {
        $role = Role::findOrFail($id);

        // prevent status update of core/system roles
        if ($role->id <= 5) {
            toast()->error('Cannot change status of system role.');
            return redirect()->back();
        }

        $role->status_id = $role->status_id == 1 ? 2 : 1;
        $role->save();

        return redirect()->route('roles.index')->with('success', 'Role status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        // prevent deletion of core/system roles
        if ($role->id <= 5) {
            toast()->error('Cannot delete system role.');
            return redirect()->back();
        }

        // $role->permissions()->detach();
        $role->delete();
        toast()->success('Role deleted successfully.');
        return redirect()->route('roles.index');
    }
}
