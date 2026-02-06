<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['active', 'inactive', 'sold', 'trash', 'archived', 'blocked', 'suspended', 'pending'];
        foreach ($statuses as $key => $status) {
            Status::create([
                'name' => $status,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
