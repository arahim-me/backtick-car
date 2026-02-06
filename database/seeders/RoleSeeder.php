<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'manager', 'seller', 'author', 'user'];
        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
