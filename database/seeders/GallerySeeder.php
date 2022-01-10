<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = [
            [
                'title' => 'Javanese',
                'desc' => 'indonesian Style',
                'picture' => '1.jpg',
            ],
            [
                'title' => 'Christian',
                'desc' => 'Pernikahan gaya barat',
                'picture' => '2.jpg',
            ],
            [
                'title' => 'Javanese',
                'desc' => 'Pernikahan adat Jawa',
                'picture' => '3.jpg',
            ],
            [
                'title' => 'Gedung Nikah',
                'desc' => 'Foto gedung pernikahan',
                'picture' => '4.jpg',
            ],
            [
                'title' => 'Sundanese',
                'desc' => 'Pernikahan adat Sunda',
                'picture' => '5.jpg',
            ],
            [
                'title' => 'British',
                'desc' => 'Pernikahan gaya western',
                'picture' => '6.jpeg',
            ],
        ];

        foreach ($gallery as $key => $value) {
            Gallery::create($value);
        }
    }
}
