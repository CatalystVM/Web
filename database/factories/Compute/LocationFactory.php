<?php

namespace Database\Factories\Compute;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compute\Location>
 */
class LocationFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'city' => fake()->unique()->city(),
            'state' => fake()->unique()->state(),
            'country' => 'United States'
        ];
    }
}
