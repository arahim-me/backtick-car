<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conditions = ['new', 'used'];
        foreach ($conditions as $condition) {
            \App\Models\Condition::create([
                'name' => $condition,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
