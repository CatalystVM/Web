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
        $user = User::factory()->create([
            'name' => 'Carson Hopper',
            'phone_number' => '478-550-7102',
            'email' => 'carson.hopper@outlook.com',
            'dark_mode' => true,
            'support_pin' => rand(1000,9999)
        ]);
        $user->refresh();
        $user->GivePermission(\App\Models\Permission::where('raw', 'stern.view')->first());

        $user = User::factory()->create([
            'name' => 'Jack Henderson',
            'phone_number' => '714-356-5395',
            'email' => 'jack@catalystvm.com',
            'dark_mode' => true,
            'support_pin' => rand(1000,9999)
        ]);
        $user->refresh();
        $user->GivePermission(\App\Models\Permission::where('raw', 'stern.view')->first());

        User::factory(10)->create();
    }
}