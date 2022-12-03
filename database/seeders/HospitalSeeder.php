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
                'name' => 'Карагандинская Областная клиническая больница',
                'address' => 'пр-т. Нурсултана Назарбаева 10',
                'city_id' => 5,
            ],
            [
                'name' => 'Областная клиническая больница г. Караганды',
                'address' => 'ул. Ерубаева 15/а',
                'city_id' => 5,
            ],
            [
                'name' => 'Областная Клиническая Больница',
                'address' => 'дом, ул. Ерубаева 43',
                'city_id' => 5,
            ],
            [
                'name' => 'Областная детская клиническая больница',
                'address' => 'ул. Ержанова 8',
                'city_id' => 5,
            ],
            [
                'name' => 'Областная челюстно-лицевая больница',
                'address' => 'улица Ержанова 47/2',
                'city_id' => 5,
            ],
            [
                'name' => 'Городская больница №1',
                'address' => 'ул. Бирюзова 22',
                'city_id' => 5,
            ]
        ];

        foreach ($data as $city) {
            Hospital::create($city);
        }
    }
}
