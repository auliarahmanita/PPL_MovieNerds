<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Tier_UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'user_id' => mt_rand(1, 5),
                'tier_id' => mt_rand(1, 3),
                'exp' => mt_rand(1, 100),
        ];
    }
}
