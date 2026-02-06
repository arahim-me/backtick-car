<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ConditionSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(RoleSeeder::class);
        // $this->call(PermissionSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ModelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(FeatureSeeder::class);
    }
}
