<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedback = [
            [
                'id_user' => 6,
                'id_booking' => 'not_real',
                'name' => 'Muhammad Rizal Bimantoro',
                'desc' => 'Website ini cukup membantu saya saat mempersiapkan pesta pernikahan, saya jadi tidak bingung lagi mengenai tema apa yang harus saya pakai di pernikahan saya',
                'show' => 'yes',
                'picture' => 'user5.jpg',
            ],
            [
                'id_user' => 5,
                'id_booking' => 'not_real',
                'name' => 'Pradita Cahyani',
                'desc' => 'Saya sempat bingung apa yang harus saya pakai saat pernikahan saya, namun website ini memberikan pilihan yang cukup banyak dan hal itu memberikan saya inspirasi mengenai apa yang saya pakai saat pernikahan',
                'show' => 'no',
                'picture' => 'user4.jpg',
            ],
            [
                'id_user' => 2,
                'id_booking' => 'not_real',
                'name' => 'Tiara Dwi Syaputri',
                'desc' => 'Website ini memberikan beragam pilihan terkait apa yang harus disiapkan saat menggelar pernikahan. Mantap. Terimakasih. Semoga website ini terus berkembang lagi dan lagi!',
                'show' => 'yes',
                'picture' => 'user3.jpg',
            ],
            [
                'id_user' => 7,
                'id_booking' => 'not_real',
                'name' => 'Fitria Dewi Wulandari',
                'desc' => 'Top markotop, sangat membantu dan itu membuat saya senang sekali. Terimakasih. Website ini akan jadi salah satu pilihan untuk dapat direkomendasikan ke kerabat saya',
                'show' => 'no',
                'picture' => 'user6.jpg',
            ],

        ];

        foreach ($feedback as $key => $value) {
            Feedback::create($value);
        }
    }
}
