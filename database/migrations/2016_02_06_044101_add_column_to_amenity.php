<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToAmenity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('amenities', function(Blueprint $table){
            $table->integer('amenitiable_id');
            $table->string('amenitiable_type');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('amenities', function(Blueprint $table){
            $table->dropColumn('amenitiable_id');
            $table->dropColumn('amenitiable_type');
        });
    }
}
