<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2000-11-26',
                'is_admin' => '1',
                'picture' => 'profile.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Tasya LuLu Armina',
                'email' => 'tasya@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2002-03-05',
                'is_admin' => '0',
                'picture' => 'user1.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Muh. Taufiqurrahman',
                'email' => 'taufiq@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2000-10-19',
                'is_admin' => '0',
                'picture' => 'user2.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Tiara Dwi Syaputri',
                'email' => 'tiara@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2000-12-15',
                'is_admin' => '0',
                'picture' => 'user3.jpg',
                'password' => bcrypt('123456'),
            ],
                        [
                'name' => 'Pradita Cahyani',
                'email' => 'pradita@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-09-25',
                'is_admin' => '0',
                'picture' => 'user4.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Muhammad Rizal Bimantoro',
                'email' => 'bima@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-06-08',
                'is_admin' => '0',
                'picture' => 'user5.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Fitria Dewi Wulandari',
                'email' => 'fitri@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-11-26',
                'is_admin' => '0',
                'picture' => 'user6.jpg',
                'password' => bcrypt('123456'),
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
