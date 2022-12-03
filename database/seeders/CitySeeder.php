<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
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
                'name' => 'Алматы',
            ],
            [
                'name' => 'Астана',
            ],
            [
                'name' => 'Шымкент',
            ],
            [
                'name' => 'Актобе',
            ],
            [
                'name' => 'Караганда',
            ],
            [
                'name' => 'Тараз',
            ],
            [
                'name' => 'Усть-Каменогорск',
            ],
            [
                'name' => 'Павлодар',
            ],
            [
                'name' => 'Атырау',
            ],
            [
                'name' => 'Семей',
            ],
            [
                'name' => 'Кызылорда',
            ],
            [
                'name' => 'Костанай',
            ],
            [
                'name' => 'Актау',
            ],
            [
                'name' => 'Уральск',
            ],
            [
                'name' => 'Петропавловск',
            ],
            [
                'name' => 'Туркестан',
            ],
            [
                'name' => 'Кокшетау',
            ],
            [
                'name' => 'Темиртау',
            ],
            [
                'name' => 'Талдыкорган',
            ],
            [
                'name' => 'Экибастуз',
            ],
            [
                'name' => 'Рудный',
            ],
        ];

        foreach ($data as $city) {
            City::create($city);
        }
    }
}
