<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Brands and models to be associated
        $brands = [
            'Volkswagen' => [ 
                'Gol',
                'Polo',
                'Virtus',
                'Jetta',
                'Tiguan',
                'Up!',
                'Fox',
                'Nivus',
                'Passat',
                'Amarok',
                'Golf',
                'Touran',
                'CrossFox',
                'Saveiro',
                'Scirocco',
                'Voyage',
                'Fusca',
                'Beetle',
                'Arteon' 
            ],
            'Fiat' => [ 
                'Palio',
                'Uno',
                'Mobi',
                'Argo',
                'Cronos',
                'Toro',
                'Fiorino',
                'Strada',
                'Freemont',
                'Punto',
                'Doblo',
                '500',
                'Linea',
                'Panda'
             ],
            'Chevrolet' => [
                'Onix',
                'Sonic',
                'Cruze',
                'Tracker',
                'Trailblazer',
                'Spin',
                'Montana',
                'Aveo',
                'Cobalt',
                'Prisma',
                'Spin',
                'Cruz',
                'Camaro',
                'Chevette'
             ],
            'Ford' => [
                'Fiesta',
                'Ka',
                'Focus',
                'Fusion',
                'EcoSport',
                'Ranger',
                'Mustang',
                'Edge',
                'Mondeo',
                'Explorer',
                'Taurus',
                'Puma',
                'Bronco'
            ],
            'Toyota' => [
                'Corolla',
                'Hilux',
                'Etios',
                'Yaris',
                'Camry',
                'Fortuner',
                'SW4',
                'Land Cruiser',
                'RAV4',
                'Prado',
                'Avalon',
                'Hilux SW4'
            ],
            'Honda' => [
                'Civic',
                'HR-V',
                'Fit',
                'Cr-V',
                'City',
                'Pilot',
                'Ridgeline',
                'Accord',
                'Jazz',
                'Insight',
                'Element'
            ],
            'Renault' => [
                'Sandero',
                'Logan',
                'Kwid',
                'Captur',
                'Duster',
                'Oroch',
                'Clio',
                'Fluence',
                'Mégane',
                'Koleos'
            ],
            'Nissan' => [
                'Kicks',
                'March',
                'Versa',
                'Sentra',
                'Altima',
                'X-Trail',
                'Frontier',
                '370Z',
                'Leaf',
                'Pathfinder'
            ],
            'Hyundai' => [
                'HB20',
                'Creta',
                'Elantra',
                'Tucson',
                'Santa Fe',
                'i30',
                'Kona',
                'Veracruz',
                'Sonata',
                'ix35'
            ],
            'Jeep' => [
                'Compass',
                'Renegade',
                'Cherokee',
                'Grand Cherokee',
                'Wrangler',
                'Gladiator',
                'Commander'
            ],
            'BMW' => [
                'X1',
                'X3',
                'X5',
                'X6',
                'X7',
                '320i',
                '330i',
                '520i',
                '530i',
                'M3',
                'M5',
                'i3',
                'i8'
            ],
            'Mercedes-Benz' => [
                'Classe A',
                'Classe B',
                'Classe C',
                'Classe E',
                'Classe S',
                'GLA',
                'GLC',
                'GLE',
                'GLS',
                'AMG GT',
                'V-Class'
            ],
            'Peugeot' => [
                '208',
                '2008',
                '3008',
                '5008',
                '308',
                '5008',
                'Partner',
                'Expert',
                'Boxer',
                '508'
            ],
            'Citroën' => [
                'C3',
                'C4',
                'C5',
                'C3 Aircross',
                'C4 Cactus',
                'Berlingo',
                'DS3',
                'DS4',
                'DS7 Crossback',
                'Aircross'
            ],
            'BYD' => [
                'T3',
                'F0',
                'F3',
                'F5',
                'Tang',
                'Song',
                'Qin',
                'Yuan',
                'E5',
                'Dolphin',
                'Han',
                'Atto 3',
                'Seal',
            ],
            'Chery' => [
                'T3',
                'F0',
                'F3',
                'F5',
                'Tang',
                'Song',
                'Qin',
                'Yuan',
                'E5',
                'Dolphin',
                'Han',
                'Atto 3',
                'Seal',
            ],
            'Kia' => [
                'Picanto', 
                'Seltos', 
                'Sportage', 
                'K5', 
                'Cerato', 
                'Stinger', 
                'Rio', 
                'Carnival'
            ],
            'Mitsubishi' => [
                'Outlander', 
                'L200 Triton', 
                'ASX', 
                'Pajero Sport', 
                'Galant', 
                'Eclipse Cross', 
                'Montero'
            ],
            'Suzuki' => [
                'Vitara', 
                'S-Cross', 
                'Swift', 
                'Jimny', 
                'Baleno', 
                'Grand Vitara', 
                'Celerio'
            ],
            'Chrysler' => [
                'Jeep Compass', 
                'Jeep Renegade', 
                'Fiat 500', 
                'Jeep Cherokee', 
                'Jeep Grand Cherokee', 
                'Wrangler'
            ],
            'Volvo' => [
                'XC60', 
                'XC90', 
                'V60', 
                'S60', 
                'S90', 
                'V90', 
                'XC40', 
                'C40 Recharge'
            ],
            'Land Rover' => [
                'Range Rover', 
                'Discovery', 
                'Discovery Sport', 
                'Defender', 
                'Evoque', 
                'Velar'
            ],
            'Mazda' => [
                'Mazda 3', 
                'Mazda 6', 
                'Mazda CX-5', 
                'Mazda CX-9', 
                'Mazda MX-5 Miata'
            ],
            'Troller' => [
                'T4'
            ],
            'Audi' => [
                'A3', 
                'A4', 
                'A5', 
                'A6', 
                'A7', 
                'A8', 
                'Q3', 
                'Q5', 
                'Q7', 
                'Q8', 
                'TT', 
                'R8', 
                'Q2'
            ],
            'Porsche' => [
                '911', 
                'Cayenne', 
                'Macan', 
                'Panamera', 
                'Taycan'
            ],
            'Ferrari' => [
                '488 GTB', 
                'Portofino', 
                'F8 Tributo', 
                'Roma', 
                'LaFerrari', 
                'GTC4Lusso', 
                '458 Italia'
            ]
        ];

        // Loop to insert the models for each brand
        foreach ($brands as $brand => $models) {
            // Searching for the brand by alias
            $brand = DB::table('car_brands')->where('alias', Str::slug($brand))->first();

            if ($brand) {
                foreach ($models as $model) {
                    DB::table('car_models')->insert([
                        'car_brand_id' => $brand->id,
                        'name' => $model,
                        'alias' => Str::slug($model),
                        'active' => true,
                    ]);
                }
            }
        }
    }
}
