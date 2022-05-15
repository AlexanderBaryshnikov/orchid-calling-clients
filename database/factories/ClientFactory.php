<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement(['interviewed', 'not_interviewed']),
            'email' => $this->faker->unique()->safeEmail(),
            'service_id' => Service::all()->random()->id,
            'assessment' => $this->faker->randomElement(range(1, 5)),
        ];
    }
}
