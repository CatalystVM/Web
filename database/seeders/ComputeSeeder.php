<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComputeNode;

class ComputeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        ComputeNode::factory(10)->create();
    }
}