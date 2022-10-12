<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Compute\Location;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compute\Node>
 */
class ComputeNodeFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'hostname' => rand(1000, 9999).'.catalystvm.com',
            'agent_port' => 8080
        ];
    }
}
