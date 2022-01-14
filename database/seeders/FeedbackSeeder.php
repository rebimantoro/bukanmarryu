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
                'name' => 'Iqbaal Ramadhan',
                'desc' => 'Website ini cukup membantu saya saat mempersiapkan pesta pernikahan, saya jadi tidak bingung lagi mengenai tema apa yang harus saya pakai di pernikahan saya',
                'created_at' => "2022-01-12 10:37:53",
                'show' => 'yes',
            ],
        ];

        foreach ($feedback as $key => $value) {
            Feedback::create($value);
        }
    }
}