<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $brands = [
            ['name' => 'Acura'],
            ['name' => 'Alfa Romeo'],
            ['name' => 'Aston Martin'],
            ['name' => 'Audi'],
            ['name' => 'Bentley'],
            ['name' => 'BMW'],
            ['name' => 'Bugatti'],
            ['name' => 'Buick'],
            ['name' => 'BYD'],
            ['name' => 'Cadillac'],
            ['name' => 'Chevrolet'],
            ['name' => 'Chery'],
            ['name' => 'Chrysler'],
            ['name' => 'Citroën'],
            ['name' => 'Dodge'],
            ['name' => 'Ferrari'],
            ['name' => 'Fiat'],
            ['name' => 'Ford'],
            ['name' => 'Geely'],
            ['name' => 'Genesis'],
            ['name' => 'GMC'],
            ['name' => 'Honda'],
            ['name' => 'Hyundai'],
            ['name' => 'Infiniti'],
            ['name' => 'Jaguar'],
            ['name' => 'Jeep'],
            ['name' => 'Kia'],
            ['name' => 'Lamborghini'],
            ['name' => 'Land Rover'],
            ['name' => 'Lexus'],
            ['name' => 'Lincoln'],
            ['name' => 'Maserati'],
            ['name' => 'Mazda'],
            ['name' => 'McLaren'],
            ['name' => 'Mercedes-Benz'],
            ['name' => 'Mini'],
            ['name' => 'Mitsubishi'],
            ['name' => 'Nissan'],
            ['name' => 'Pagani'],
            ['name' => 'Peugeot'],
            ['name' => 'Porsche'],
            ['name' => 'Ram'],
            ['name' => 'Renault'],
            ['name' => 'Rolls-Royce'],
            ['name' => 'Saab'],
            ['name' => 'Subaru'],
            ['name' => 'Suzuki'],
            ['name' => 'Tesla'],
            ['name' => 'Toyota'],
            ['name' => 'Troller'],
            ['name' => 'Volkswagen'],
            ['name' => 'Volvo'],
        ];

        foreach ($brands as &$brand) {
            $brand['alias'] = Str::slug($brand['name']);
            $brand['active'] = true;
        }

        DB::table('car_brands')->insert($brands);
    }
}