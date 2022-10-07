<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration {

    /**
     * The table associated with the migration.
     *
     * @var string
     */
    protected $table = 'sessions'; 

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignUuid('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
            $table->timestamps();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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

