<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Categories by using seeder
        $categories = ["Mini Car", "Sedan", "SUV", "Luxury Car"];
        foreach ($categories as $key => $category) {
            Categories::create([
                'name' => $category,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
