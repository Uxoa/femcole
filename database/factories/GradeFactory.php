<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::factory(),
            'grade' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10),
            'trimester' => $this->faker->biasedNumberBetween($min = 1, $max= 3, $function = 'sqrt'),
            'subject' => $this->faker->company(),
            'exam' => $this->faker->biasedNumberBetween($min = 1, $max= 3, $function = 'sqrt'),
            'schoolYear' => $this->faker->year($max = 'now'),
        ];
    }
}
