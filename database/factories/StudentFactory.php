<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
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
        'studentName' => $this->faker->firstName(),
        'studentSurname1' => $this->faker->lastName(),
        'studentSurname2' => $this->faker->lastName(),
        'studentEmail' => $this->faker->email(),
        'studentPassword' => $this->faker->password(),
        'studentImage' => $this->faker->imageUrl(),



        ];
    }
}
