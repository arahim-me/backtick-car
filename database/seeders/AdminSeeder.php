<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activeStatus = Status::where('name', 'active')->first();
        $adminRole = Role::where('name', 'admin')->first();
        User::factory()->create([
            'name' => 'Admin',
            'role_id' => $adminRole->id,
            'lang' => 'en',
            'email' => 'admin@gmail.com',
            'status_id' => $activeStatus->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
