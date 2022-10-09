<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * The table associated with the migration.
     *
     * @var string
     */
    protected $table = 'compute_plans'; 
    
    /**
     * Run the migrations.
     * 
     * https://docs.solus.io/api/#tag/Plans/operation/get-plan
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('location_id');
            $table->integer('solus_plan_id');
            $table->string('name', 16);
            $table->enum('storage_type', ['fb', 'lvm', 'thinlvm', 'nfs'])->default('fb');
            $table->enum('image_format', ['raw', 'qcow2'])->default('raw');

            $table->integer('storage_capacity')->default(1);
            $table->integer('ram_capacity')->default(1);
            $table->integer('cpu_cores')->default(1);

            $table->boolean('can_create_backups')->default(true);
            $table->boolean('can_create_snapshots')->default(true);
            $table->boolean('is_visible')->default(true);

            $table->float('backup_price')->default(0.0);
            $table->json('price');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->foreign('location_id')->references('id')->on('compute_locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists($this->table);
    }
};
