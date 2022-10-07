<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::factory()->create([
            'name' => 'Carson Hopper',
            'phone_number' => '478-550-7102',
            'email' => 'carson.hopper@outlook.com',
            'dark_mode' => true
        ]);

        User::factory(200)->create();
    }
}