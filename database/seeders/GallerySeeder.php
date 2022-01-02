<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'title' => 'title1',
                'categori' => 'Man',
                'picture' => 'profile.jpg',
            ],
            [],
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
