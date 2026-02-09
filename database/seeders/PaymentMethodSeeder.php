<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methods = [
            'Cash on Delivery',
            'Credit Card',
            'PayPal',
            'E-Wallet',
            'Manual Payment',
            'Bank Transfer',
        ];

        foreach ($methods as $method) {
            PaymentMethod::create([
                'name' => $method,
            ]);
        }
    }
}
