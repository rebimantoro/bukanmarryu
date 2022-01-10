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
            // ke1
            [
                'title' => 'Kemeja Putih',
                'categorie' => 'Man',
                'price' => '100000',
                'desc' => 'Kemeja untuk pengantin pria berwarna putih',
                'picture' => 'm1.png',
            ],
            [
                'title' => 'Sepatu Putih',
                'categorie' => 'Woman',
                'price' => '49999',
                'desc' => 'Sepatu cantik putih untuk pengantin wanita',
                'picture' => 'w1.png',
            ],
            [
                'title' => 'Mahkota Emas',
                'categorie' => 'Accessoris',
                'price' => '49999',
                'desc' => 'Mahkota emas untuk aksesoris pengantin',
                'picture' => 'a1.png',
            ],
            [
                'title' => 'Set Bunga Dekorasi Pelaminan',
                'categorie' => 'Decoration',
                'price' => '62000',
                'desc' => 'Set dekorasi pelaminan penuh dengan bunga',
                'picture' => 'd1.png',
            ],
            [
                'title' => 'Lampu Bunga',
                'categorie' => 'Other',
                'price' => '50000',
                'desc' => 'Dekorasi lampu berbentuk bunga',
                'picture' => 'o1.png',
            ],
            
            // ke2
            [
                'title' => 'Pantopel Hitam',
                'categorie' => 'Man',
                'price' => '90000',
                'desc' => 'Pantopel hitam untuk pengantin pria',
                'picture' => 'm2.png',
            ],
            [
                'title' => 'Sepatu Glass',
                'categorie' => 'Woman',
                'price' => '50000',
                'desc' => 'Sepatu cantik glass untuk pengantin wanita',
                'picture' => 'w2.png',
            ],
            [
                'title' => 'Pin Sakura',
                'categorie' => 'Accessoris',
                'price' => '25000',
                'desc' => 'Pin rambut berbentuk bunga sakura',
                'picture' => 'a2.png',
            ],
            [
                'title' => 'Set Pelaminan',
                'categorie' => 'Decoration',
                'price' => '150000',
                'desc' => 'Set dekorasi pelaminan dengan lampu yang soft',
                'picture' => 'd2.png',
            ],
            [
                'title' => 'Lampion',
                'categorie' => 'Other',
                'price' => '50000',
                'desc' => 'Dekorasi lampion',
                'picture' => 'o2.png',
            ],

            // ke3
            [
                'title' => 'Kemeja Hitam',
                'categorie' => 'Man',
                'price' => '100000',
                'desc' => 'Kemeja hitam casual untuk pria',
                'picture' => 'm3.png',
            ],
            [
                'title' => 'Dress Mewah',
                'categorie' => 'Woman',
                'price' => '200000',
                'desc' => 'Dress mewah untuk pengantin wanita',
                'picture' => 'w3.png',
            ],
            [
                'title' => 'Set AKsesoris',
                'categorie' => 'Accessoris',
                'price' => '49999',
                'desc' => 'Satu set aksesoris adat Indonesia',
                'picture' => 'a3.png',
            ],
            [
                'title' => 'Set Pelaminan Corak Putih',
                'categorie' => 'Decoration',
                'price' => '50000',
                'desc' => 'Set dekorasi pelaminan nuansa Putih',
                'picture' => 'd3.png',
            ],
            [
                'title' => 'Sound System',
                'categorie' => 'Other',
                'price' => '50000',
                'desc' => 'Sound System Pernikahan',
                'picture' => 'o3.png',
            ],

            // ke4
            [
                'title' => 'Kemeja Putih Polos',
                'categorie' => 'Man',
                'price' => '900000',
                'desc' => 'Kemeja untuk pria berwarna putih',
                'picture' => 'm4.png',
            ],
            [
                'title' => 'Casual Dress Hitam',
                'categorie' => 'Woman',
                'price' => '70999',
                'desc' => 'Casual dress hitam untuk wanita',
                'picture' => 'w4.png',
            ],
            [
                'title' => 'Mahkota dan Cadar',
                'categorie' => 'Accessoris',
                'price' => '49999',
                'desc' => 'Satu set mahkota dan cadar untuk aksesoris pengantin wanita',
                'picture' => 'a4.png',
            ],
            [
                'title' => 'Set Dekorasi Akad Simpel',
                'categorie' => 'Decoration',
                'price' => '62000',
                'desc' => 'Set dekorasi akad simpel cocok untuk semua orang',
                'picture' => 'd4.png',
            ],
            [
                'title' => 'Set Pengantin Minang',
                'categorie' => 'Other',
                'price' => '500000',
                'desc' => 'Satu set baju pengantin adat Minang',
                'picture' => 'o4.png',
            ],

            // ke5
            [
                'title' => 'Pantopel Hitam Pria',
                'categorie' => 'Man',
                'price' => '100000',
                'desc' => 'Pantopel Hitam untuk pengantin pria dengan pita',
                'picture' => 'm5.png',
            ],
            [
                'title' => 'Dress Cream',
                'categorie' => 'Woman',
                'price' => '95000',
                'desc' => 'Dress Cream untuk pengantin wanita',
                'picture' => 'w5.png',
            ],
            [
                'title' => 'Mahkota Minang',
                'categorie' => 'Accessoris',
                'price' => '50000',
                'desc' => 'Mahkota minang untuk aksesoris pengantin',
                'picture' => 'a5.png',
            ],
            [
                'title' => 'Set Akad Putih',
                'categorie' => 'Decoration',
                'price' => '69000',
                'desc' => 'Set dekorasi akad nuansa putih',
                'picture' => 'd5.png',
            ],
            [
                'title' => 'Set Pengantin',
                'categorie' => 'Other',
                'price' => '500000',
                'desc' => 'Set pengantin adat Indonesia',
                'picture' => 'o5.png',
            ],

            // ke6
            [
                'title' => 'Pantopel Putih',
                'categorie' => 'Man',
                'price' => '90000',
                'desc' => 'Pantopel pengantin pria yang berwarna putih',
                'picture' => 'm6.png',
            ],
            [
                'title' => 'Dress Legam',
                'categorie' => 'Woman',
                'price' => '150000',
                'desc' => 'Dress hitam legam untuk wanita',
                'picture' => 'w6.png',
            ],
            [
                'title' => 'Aksesoris Jawa',
                'categorie' => 'Accessoris',
                'price' => '25000',
                'desc' => 'Set aksesoris Jawa untuk pengantin wanita',
                'picture' => 'a6.png',
            ],
            [
                'title' => 'Pelaminan Putih',
                'categorie' => 'Decoration',
                'price' => '90000',
                'desc' => 'Set dekorasi pelaminan nuansa putih bersih',
                'picture' => 'd6.png',
            ],
            [
                'title' => 'Bunga',
                'categorie' => 'Other',
                'price' => '20000',
                'desc' => 'Bunga Pernikahan',
                'picture' => 'o6.png',
            ],

            // ke7
            [
                'title' => 'Kemeja Biru',
                'categorie' => 'Man',
                'price' => '100000',
                'desc' => 'Kemeja berwarna biru untuk pria',
                'picture' => 'm7.png',
            ],
            [
                'title' => 'Double Set Dress',
                'categorie' => 'Woman',
                'price' => '130000',
                'desc' => 'Double set simpel untuk wanita',
                'picture' => 'w7.png',
            ],
            [
                'title' => 'Jepitan Bunga',
                'categorie' => 'Accessoris',
                'price' => '25000',
                'desc' => 'Jepitan bunga cantik untuk pengantin wanita',
                'picture' => 'a7.png',
            ],
            [
                'title' => 'Set BPelaminan Vintage',
                'categorie' => 'Decoration',
                'price' => '90000',
                'desc' => 'Set dekorasi pelaminan dengan nuansa vintage',
                'picture' => 'd7.png',
            ],
            [
                'title' => 'Set baju nikah adat Jawa',
                'categorie' => 'Other',
                'price' => '200000',
                'desc' => 'Set baju nikah adat Jawa',
                'picture' => 'o7.png',
            ],

            // ke8
            [
                'title' => 'Jas Putih',
                'categorie' => 'Man',
                'price' => '100000',
                'desc' => 'Jas berwarna putih untuk pengantin pria',
                'picture' => 'm8.png',
            ],
            [
                'title' => 'Set Dress dan Cadar',
                'categorie' => 'Woman',
                'price' => '150000',
                'desc' => 'Set dress dan cadar bernuansa putih untuk pengantin wanita',
                'picture' => 'w8.png',
            ],
            [
                'title' => 'Cadar Transparan',
                'categorie' => 'Accessoris',
                'price' => '30000',
                'desc' => 'Cadar untuk pengantin wanita',
                'picture' => 'a8.png',
            ],
            [
                'title' => 'Set Jaga',
                'categorie' => 'Decoration',
                'price' => '50000',
                'desc' => 'Set untuk jaga dalam acara pernikahan',
                'picture' => 'd8.png',
            ],
            [
                'title' => 'Set Baju Adat Melayu',
                'categorie' => 'Other',
                'price' => '250000',
                'desc' => 'Satu set baju nikah adat melayu',
                'picture' => 'o8.png',
            ],

            // ke9
            [
                'title' => 'Kemeja Tosca',
                'categorie' => 'Man',
                'price' => '90000',
                'desc' => 'Kemeja tosca untuk pria',
                'picture' => 'm9.png',
            ],
            [
                'title' => 'Set Kebaya',
                'categorie' => 'Woman',
                'price' => '120000',
                'desc' => 'Set kebaya hitam dengan rok lilit warna merah',
                'picture' => 'w9.png',
            ],
            [
                'title' => 'Kalung',
                'categorie' => 'Accessoris',
                'price' => '20000',
                'desc' => 'Kalung untuk aksesoris pengantin wanita',
                'picture' => 'a9.png',
            ],
            [
                'title' => 'Set Kursi Tamu',
                'categorie' => 'Decoration',
                'price' => '200000',
                'desc' => 'Set kursi tamu bernuansa putih',
                'picture' => 'd9.png',
            ],

            // ke10
            [
                'title' => 'Jas Biru',
                'categorie' => 'Man',
                'price' => '110000',
                'desc' => 'Jas biru untuk pengantin pria',
                'picture' => 'm10.png',
            ],
            [
                'title' => 'Dress Cantik',
                'categorie' => 'Woman',
                'price' => '200000',
                'desc' => 'Dress dengan jahitan tangan untuk bordirnya',
                'picture' => 'w10.png',
            ],
            [
                'title' => 'Mahkota Silver',
                'categorie' => 'Accessoris',
                'price' => '50000',
                'desc' => 'Mahkota silver untuk aksesoris pengantin',
                'picture' => 'a10.png',
            ],
            [
                'title' => 'Set Senja Dekorasi Pelaminan',
                'categorie' => 'Decoration',
                'price' => '80000',
                'desc' => 'Set dekorasi pelaminan bernuansa senja',
                'picture' => 'd10.png',
            ],

            // ke11
            [
                'title' => 'Kemeja Pink',
                'categorie' => 'Man',
                'price' => '105000',
                'desc' => 'Kemeja berwarna pink untuk pria',
                'picture' => 'm11.png',
            ],
            [
                'title' => 'Dress Galaxy',
                'categorie' => 'Woman',
                'price' => '140000',
                'desc' => 'Dress bermotif galaxy untuk wanita',
                'picture' => 'w11.png',
            ],
            [
                'title' => 'Stand Bunga',
                'categorie' => 'Decoration',
                'price' => '30000',
                'desc' => 'Stand bunga cantik untuk dekorasi',
                'picture' => 'd11.png',
            ],

            //ke12
            [
                'title' => 'Purple Dress',
                'categorie' => 'Woman',
                'price' => '100000',
                'desc' => 'Dress berwarna ungu untuk wanita',
                'picture' => 'w12.png',
            ],
            [
                'title' => 'Set Pelaminan Dan Bangu Tamu',
                'categorie' => 'Decoration',
                'price' => '125000',
                'desc' => 'Set pelaminan dan bangku tamu berwarna putih',
                'picture' => 'd12.png',
            ],

            // ke13
            [
                'title' => 'Red Dress',
                'categorie' => 'Woman',
                'price' => '120000',
                'desc' => 'Dress pendek warna merah untuk wanita',
                'picture' => 'w13.png',
            ],
            [
                'title' => 'Bunga Kenanga',
                'categorie' => 'Decoration',
                'price' => '50000',
                'desc' => 'Hiasan Bunga Kenanga untuk dekorasi',
                'picture' => 'd13.png',
            ],

            // ke14
            [
                'title' => 'Set Pelaminan Nuansa Coklat',
                'categorie' => 'Decoration',
                'price' => '90000',
                'desc' => 'Set pelaminan nuansa coklat dan vintage',
                'picture' => 'd14.png',
            ],
            [
                'title' => 'Set Pelaminan Backlight Ungu',
                'categorie' => 'Decoration',
                'price' => '85000',
                'desc' => 'Set pelaminan nuansa putih dengan backlight ungu',
                'picture' => 'd15.png',
            ],
            [
                'title' => 'Gorden Nikah',
                'categorie' => 'Decoration',
                'price' => '97000',
                'desc' => 'Dekorasi gorden berwarna coklat',
                'picture' => 'd16.png',
            ],


        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}