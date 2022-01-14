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
                'id_user' => 2,
                'id_booking' => 'not_real',
                'name' => 'Muhammad Rizal Bimantoro',
                'desc' => 'Website ini cukup membantu saya saat mempersiapkan pesta pernikahan, saya jadi tidak bingung lagi mengenai tema apa yang harus saya pakai di pernikahan saya',
                'show' => 'yes',
                'picture' => 'user5.jpg',
            ],
        ];

        foreach ($feedback as $key => $value) {
            Feedback::create($value);
        }
    }
}
