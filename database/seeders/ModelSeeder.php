<?php

namespace Database\Seeders;

use App\Models\Brands;
use App\Models\Models;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            [
                'brand' => "Toyota",
                'models' => [
                    "Agya",
                    "Auris",
                    "Avanza",
                    "Aygo",
                    "Belta",
                    "C-HR",
                    "Corolla",
                    "Corolla Cross",
                    "Camry",
                    "Crown",
                    "Fortuner",
                    "Harrier",
                    "Highlander",
                    "Hilux",
                    "Innova",
                    "Land Cruiser",
                    "Land Cruiser Prado",
                    "Mark X",
                    "Raize",
                    "Rush",
                    "Sequoia",
                    "Sienna",
                    "Supra",
                    "Tacoma",
                    "Veloz",
                    "Vios",
                    "Yaris"
                ]
            ],
            [
                'brand' => "Lexus",
                'models' =>
                    [
                        "CT",
                        "ES",
                        "GS",
                        "GX",
                        "HS",
                        "IS",
                        "LC",
                        "LFA",
                        "LM",
                        "LS",
                        "LX",
                        "NX",
                        "RC",
                        "RX",
                        "RZ",
                        "UX"
                    ]
            ],
            [
                'brand' => "Nissan",
                'models' => [
                    "370Z",
                    "Almera",
                    "Altima",
                    "Armada",
                    "Ariya",
                    "Bluebird",
                    "Dayz",
                    "Frontier",
                    "GT-R",
                    "Juke",
                    "Kicks",
                    "Leaf",
                    "Maxima",
                    "Micra",
                    "Murano",
                    "Navara",
                    "Note",
                    "Pathfinder",
                    "Patrol",
                    "Qashqai",
                    "Rogue",
                    "Sentra",
                    "Serena",
                    "Skyline",
                    "Sunny",
                    "Teana",
                    "Terra",
                    "Tiida",
                    "Versa",
                    "X-Trail"
                ]
            ],
            [
                'brand' => "Honda",
                'models' => [
                    "Accord",
                    "Airwave",
                    "Amaze",
                    "Brio",
                    "City",
                    "Civic",
                    "CR-V",
                    "CR-Z",
                    "Crosstour",
                    "Element",
                    "Fit",
                    "Freed",
                    "HR-V",
                    "Insight",
                    "Integra",
                    "Jazz",
                    "Legend",
                    "Mobilio",
                    "Odyssey",
                    "Passport",
                    "Pilot",
                    "Ridgeline",
                    "S2000",
                    "Stepwgn",
                    "Stream",
                    "WR-V"
                ]
            ],
            [
                'brand' => "Mitsubishi",
                'models' => [
                    "3000GT",
                    "ASX",
                    "Attrage",
                    "Challenger",
                    "Colt",
                    "Delica",
                    "Eclipse",
                    "Eclipse Cross",
                    "Galant",
                    "Grandis",
                    "i-MiEV",
                    "Lancer",
                    "Lancer Evolution",
                    "Mirage",
                    "Montero",
                    "Montero Sport",
                    "Outlander",
                    "Outlander PHEV",
                    "Pajero",
                    "Pajero Sport",
                    "RVR",
                    "Space Star",
                    "Triton",
                    "Xpander"
                ]
            ],
            [
                'brand' => "Mazda",
                'models' => [
                    "323",
                    "626",
                    "929",
                    "Atenza",
                    "Axela",
                    "Bongo",
                    "BT-50",
                    "CX-3",
                    "CX-30",
                    "CX-5",
                    "CX-50",
                    "CX-60",
                    "CX-8",
                    "CX-9",
                    "CX-90",
                    "Demio",
                    "Mazda2",
                    "Mazda3",
                    "Mazda5",
                    "Mazda6",
                    "MPV",
                    "MX-5",
                    "Premacy",
                    "RX-7",
                    "RX-8",
                    "Tribute"
                ]
            ],
            [
                'brand' => "Suzuki",
                'models' => [
                    "Across",
                    "Alto",
                    "Baleno",
                    "Carry",
                    "Celerio",
                    "Ciaz",
                    "Eeco",
                    "Ertiga",
                    "Escudo",
                    "Every",
                    "Fronx",
                    "Grand Vitara",
                    "Hustler",
                    "Ignis",
                    "Jimny",
                    "Kizashi",
                    "Landy",
                    "Liana",
                    "Samurai",
                    "S-Cross",
                    "Solio",
                    "Spacia",
                    "Swift",
                    "SX4",
                    "Vitara",
                    "Wagon R"
                ]
            ],
            [
                'brand' => "Daihatsu",
                'models' => [
                    "Ayla",
                    "Bezza",
                    "Boon",
                    "Cast",
                    "Charade",
                    "Copen",
                    "Cuore",
                    "Gran Max",
                    "Hijet",
                    "Luxio",
                    "Materia",
                    "Mira",
                    "Move",
                    "Rocky",
                    "Sirion",
                    "Terios",
                    "Thor",
                    "Tanto",
                    "Xenia",
                    "YRV"
                ]
            ],
            [
                'brand' => "Subaru",
                'models' => [
                    "Ascent",
                    "Baja",
                    "BRZ",
                    "Crosstrek",
                    "Dex",
                    "Exiga",
                    "Forester",
                    "Impreza",
                    "Justy",
                    "Legacy",
                    "Levorg",
                    "Outback",
                    "Pleo",
                    "R1",
                    "R2",
                    "Sambar",
                    "Solterra",
                    "Stella",
                    "SVX",
                    "Traviq",
                    "Tribeca",
                    "WRX",
                    "XV"
                ]
            ]
        ];

        // Foreach Loop
        foreach ($models as $key => $model) {
            $brand = Brands::create([
                'name' => $model['brand'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
            foreach ($model['models'] as $key => $model_name) {
                $model = Models::create([
                    'brand_id' => $brand->id,
                    'name' => $model_name,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

    }
}
