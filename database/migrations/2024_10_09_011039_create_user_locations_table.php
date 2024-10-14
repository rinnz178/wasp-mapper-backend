<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('user_locations', function (Blueprint $table) {
        $table->id();
        $table->string('uuid'); // Device UUID
        $table->decimal('latitude', 10, 8); // User latitude
        $table->decimal('longitude', 11, 8); // User longitude
        $table->integer('level')->nullable(); // User level, nullable with default value null
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_locations');
    }
}
