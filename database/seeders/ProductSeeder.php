<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
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
                'title' => 'gambar1',
                'categorie' => 'Man',
                'price' => '200000',
                'desc' => 'coba Product',
                'picture' => 'profile.jpg',
            ],
            [],
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
