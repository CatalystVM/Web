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
    protected $table = 'server_virtual'; 

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('plan_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->foreign('plan_id')->references('id')->on('plans_'.$this->table)->onDelete('cascade');
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
