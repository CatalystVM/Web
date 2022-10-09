<?php

namespace Database\Factories\Compute;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Compute\Location;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compute\Node>
 */
class NodeFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        $location = Location::inRandomOrder()->first();
        return [
            'location_id' => $location->id,
            'solus_compute_id' => 0,
            'hostname' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $location->city)).'.catalystvm.com'),
            'agent_port' => 8080
        ];
    }
}
