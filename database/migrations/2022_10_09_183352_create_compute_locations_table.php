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
    protected $table = 'compute_locations'; 
    
    /**
     * Run the migrations.
     * 
     * https://docs.solus.io/api/#tag/Locations/operation/get-an-existing-location
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('city', 24);
            $table->string('state', 24);
            $table->string('country', 24);
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
