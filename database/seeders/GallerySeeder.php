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
                'title' => 'gallery1',
                'desc' => 'coba',
                'picture' => '1.jpg',
            ],
            [],
        ];

        foreach ($gallery as $key => $value) {
            Gallery::create($value);
        }
    }
}
