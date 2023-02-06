<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            /* 'user_id' => function(){
                return factory(\App\User::class)->create()->id;
            }, */
            /* 'user_id' => User::where('isAdmin','=', false)->random()->id, */
            /* 'user_id' => $this->faker->randomElement([User::class])->pluck('id'), */
            'user_id' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 5),
            /* 'user_id' => User::inRandomOrder()->first()->id, */
            'grade' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10),
            'trimester' => $this->faker->biasedNumberBetween($min = 1, $max= 4, $function = 'sqrt'),
            'subject' => $this->faker->company(),
            'exam' => $this->faker->biasedNumberBetween($min = 1, $max= 3, $function = 'sqrt'),
            'schoolYear' => $this->faker->year($max = 'now'),
        ];
    }
}