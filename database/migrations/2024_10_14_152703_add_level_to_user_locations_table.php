<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelToUserLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_locations', function (Blueprint $table) {
            $table->integer('level')->nullable()->after('longitude'); // Adding the level column after longitude
        });
    }
    
    public function down()
    {
        Schema::table('user_locations', function (Blueprint $table) {
            $table->dropColumn('level');
        });
    }
}
