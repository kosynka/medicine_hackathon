<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'iin' => '800818514587',
                'birth_date' => '1980-08-18',
                'sex' => 'female',
                'fio' => 'Мельникова Ксения Витальевна',
                'email' => 'melnikova@mail.ru',
                'city_id' => 5,
                'role' => 'doctor',
                'hospital_id' => 6,
                'password' => Hash::make('123'),
            ],
            [
                'iin' => '020818514587',
                'birth_date' => '2002-08-18',
                'sex' => 'male',
                'fio' => 'Шажли Алиби Боранбайулы',
                'email' => 'alibi@mail.ru',
                'city_id' => 5,
                'role' => 'patient',
                'doctor_id' => 1,
                'hospital_id' => 6,
                'password' => Hash::make('123'),
            ],
            [
                'iin' => '010818514587',
                'birth_date' => '2001-08-18',
                'sex' => 'female',
                'fio' => 'Подкользина Лилия Федотовна',
                'email' => 'lilo@mail.ru',
                'city_id' => 5,
                'role' => 'patient',
                'doctor_id' => 1,
                'hospital_id' => 6,
                'password' => Hash::make('123'),
            ],
            [
                'iin' => '990818514587',
                'birth_date' => '1999-08-18',
                'sex' => 'male',
                'fio' => 'Могутов Руслан Игоревич',
                'email' => 'rusya@mail.ru',
                'city_id' => 5,
                'role' => 'patient',
                'doctor_id' => 1,
                'hospital_id' => 6,
                'password' => Hash::make('123'),
            ],
            [
                'iin' => '980818514587',
                'birth_date' => '1998-08-18',
                'sex' => 'male',
                'fio' => 'Евтушенко Вячеслав Артемович',
                'email' => 'vasya@mail.ru',
                'city_id' => 5,
                'role' => 'patient',
                'doctor_id' => 1,
                'hospital_id' => 6,
                'password' => Hash::make('123'),
            ],
            [
                'iin' => '030818514587',
                'birth_date' => '2003-08-18',
                'sex' => 'female',
                'fio' => 'Полевщикова Анфиса Георгиевна',
                'email' => 'anfysa@mail.ru',
                'city_id' => 5,
                'role' => 'patient',
                'doctor_id' => 1,
                'hospital_id' => 6,
                'password' => Hash::make('123'),
            ],
            [
                'iin' => '000818514587',
                'birth_date' => '2000-08-18',
                'sex' => 'female',
                'fio' => 'Любова Валерия Мироновна',
                'email' => 'valeriya@mail.ru',
                'city_id' => 5,
                'role' => 'patient',
                'doctor_id' => 1,
                'hospital_id' => 6,
                'password' => Hash::make('123'),
            ]
        ];
        
        foreach ($data as $user) {
            User::create($user);
        }
    }
}
