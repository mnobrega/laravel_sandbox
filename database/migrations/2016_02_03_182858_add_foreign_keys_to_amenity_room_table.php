<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAmenityRoomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('amenity_room', function(Blueprint $table)
		{
			$table->foreign('amenitie_id', 'fk_amenity_room_amenities1')->references('id')->on('amenities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('room_id', 'fk_amenity_room_rooms1')->references('id')->on('rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('amenity_room', function(Blueprint $table)
		{
			$table->dropForeign('fk_amenity_room_amenities1');
			$table->dropForeign('fk_amenity_room_rooms1');
		});
	}

}
