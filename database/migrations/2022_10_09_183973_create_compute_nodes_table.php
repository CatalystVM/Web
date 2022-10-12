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
            $table->string('hostname', 64);
            $table->integer('ssh_port')->default(22);
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
