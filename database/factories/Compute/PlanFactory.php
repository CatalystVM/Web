<?php

namespace Database\Factories\Compute;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Compute\Location;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compute\Plan>
 */
class PlanFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        static $count = 0;
        $cpu_cores = [1, 2, 4, 6, 8, 16, 20, 24, 32];
        $ram       = [1, 2, 4, 8, 16, 32, 64, 96, 128, 192];
        $storage   = [25, 50, 80, 160, 320, 640, 1280, 1920, 2560, 3840];

        $cpu_core = $cpu_cores[rand(0, sizeof($cpu_cores) - 1)];
        return [
            'location_id' => Location::inRandomOrder()->first()->id,
            'solus_plan_id' => 0,
            'name' => 'Plan #'.($count++),
            'storage_type' => 'fb',
            'image_format' => 'raw',
            'storage_capacity' => $storage[rand(0, sizeof($storage) - 1)],
            'ram_capacity' => $ram[rand(0, sizeof($ram) - 1)] * 1024,
            'cpu_cores' => $cpu_core,
            'can_create_backups' => true,
            'can_create_snapshots' => true,
            'is_visible' => true,
            'backup_price' => 1.0,

            'price->monthly' => ($cpu_core * 5),
            'price->quarterly' => 0.95 * (($cpu_core * 5) * 3),
            'price->annually' => 0.90 * (($cpu_core * 5) * 12)
        ];
    }
}
