<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReservationRoomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservation_room', function(Blueprint $table)
		{
			$table->foreign('reservation_id', 'fk_reservation_room_reservations1')->references('id')->on('reservations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('room_id', 'fk_reservation_room_rooms1')->references('id')->on('rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reservation_room', function(Blueprint $table)
		{
			$table->dropForeign('fk_reservation_room_reservations1');
			$table->dropForeign('fk_reservation_room_rooms1');
		});
	}

}
