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
    protected $table = 'compute_nodes'; 
    
    /**
     * Run the migrations.
     * 
     * https://docs.solus.io/api/#tag/Compute-Resources/operation/get-compute-resource
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('location_id');
            $table->integer('solus_compute_id');
            $table->string('hostname', 64);
            $table->integer('agent_port')->default(8080);
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
