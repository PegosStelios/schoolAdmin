<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
        $faker = Faker::create();

        return [
            'name' => $faker->firstName,
            'lastName' => $faker->lastName,
            'age' => random_int(18, 60),
            'dob' => $faker->date,
            'email' => $faker->email,
            'telephone' => $faker->phoneNumber,
            'address' => $faker->address,
            'city' => $faker->city,
            'zip' => random_int(5, 5),
            'fatherName' => $faker->firstName,
            'fatherLastName' => $faker->lastName,
            'semester' => random_int(1, 4),
            'examResult' => random_int(0, 1),
            'absence' => random_int(0, 50),
            'gpa' => random_int(1, 10) / random_int(1, 10),
            'subject' => $faker->word,
        ];
    }
}
