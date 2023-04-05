<?php

namespace Database\Factories;

use App\Enums\UserGenderEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $hireDate = fake()->dateTimeBetween('-1 year');

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'birth_date' => fake()->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'gender' => fake()->randomElement(UserGenderEnum::getAllValue()),
            'hire_date' => $hireDate,
            'created_at' => $hireDate,
            'updated_at' => $hireDate,
        ];
    }
}
