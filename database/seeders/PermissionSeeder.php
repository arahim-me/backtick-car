<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-user',
            'read-user',
            'update-user',
            'delete-user',
            'create-post',
            'read-post',
            'update-post',
            'delete-post',
            'create-role',
            'read-role',
            'update-role',
            'delete-role',
            'create-permission',
            'read-permission',
            'update-permission',
            'delete-permission',
            'create-brand',
            'read-brand',
            'update-brand',
            'delete-brand',
            'create-model',
            'read-model',
            'update-model',
            'delete-model',
            'create-feature',
            'read-feature',
            'update-feature',
            'delete-feature',
        ];

        foreach ($permissions as $key => $permission) {
            Permission::create([
                'name'=>$permission,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
