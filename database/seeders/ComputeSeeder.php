<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compute\Location;
use App\Models\Compute\Node;
use App\Models\Compute\Plan;

class ComputeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Location::factory(10)->create();
        Plan::factory(10)->create();
        Node::factory(10)->create();
    }
}