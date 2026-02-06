<?php

namespace Database\Seeders;

use App\Models\Features;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Features by using seeder
        $features = [
            "A/C: Front",
            "Backup Camera",
            "Cruise Control",
            "Navigation",
            "Power Locks",
            "Audio system",
            "Touchscreen display",
            "GPS navigation",
            "Phone connectivity",
            "In-car Wi-Fi",
            "Anti-lock brake system (ABS)",
            "Electronic stability control (ESC)",
            "Brake assist (BA)",
            "Airbags",
            "Blind spot monitoring system (BSM)",
            "Premium leather seats",
            "Wood trim",
            "Mini bar",
            "Rear seat ventilation system",
            "Large infotainment screen",
            "Chrome-plated grill",
            "Smart headlight cluster",
            "Premium wheels",
            "Body character lines",
            "High-quality paint"
        ];
        foreach ($features as $key => $feature) {
            Features::create([
                'name' => $feature,
                // 'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
