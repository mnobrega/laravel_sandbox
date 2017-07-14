<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmenityRoomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('amenity_room', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('amenitie_id')->unsigned()->index('fk_amenity_room_amenities1_idx');
			$table->integer('room_id')->unsigned()->index('fk_amenity_room_rooms1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('amenity_room');
	}

}
