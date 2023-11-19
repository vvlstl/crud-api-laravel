<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'email' => $this->faker->unique()->safeEmail,
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 99),
            'sex' => $this->faker->randomElement(['male', 'female', 'other']),
            'birthday' => $this->faker->date,
            'phone' => $this->faker->numerify('###########'),

        ];
    }
}
