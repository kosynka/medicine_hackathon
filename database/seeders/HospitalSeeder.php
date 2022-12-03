<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Городская больница №1',
                'address' => 'Городская больница №1',
                'city_id' => 5,
            ],
            [
                'name' => 'Городская больница №1',
                'address' => 'Городская больница №1',
                'city_id' => 5,
            ],
        ];

        foreach ($data as $city) {
            Hospital::create($city);
        }
    }
}
