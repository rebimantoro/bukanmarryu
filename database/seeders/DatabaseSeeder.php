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
                'birthDate' => '2001-11-26',
                'is_admin' => '1',
                'picture' => 'profile.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Bima',
                'email' => 'bima@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-11-26',
                'is_admin' => '0',
                'picture' => 'profile.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Fitri',
                'email' => 'fitri@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-11-26',
                'is_admin' => '0',
                'picture' => 'profile.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Pradita',
                'email' => 'pradita@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-11-26',
                'is_admin' => '0',
                'picture' => 'profile.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Tiara',
                'email' => 'tiara@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-11-26',
                'is_admin' => '0',
                'picture' => 'profile.jpg',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Tasya',
                'email' => 'tasya@gmail.com',
                'no_hp' => '087689478',
                'birthDate' => '2001-11-26',
                'is_admin' => '0',
                'picture' => 'profile.jpg',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
