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
    protected $table = 'users'; 

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 64);
            $table->string('email')->unique();
            $table->string('phone_number', 12)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->string('password');
            $table->boolean('dark_mode')->default(true);
            $table->rememberToken();
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
