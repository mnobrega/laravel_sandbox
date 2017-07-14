<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationRoomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservation_room', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('room_id')->unsigned()->index('fk_reservation_room_rooms1_idx');
			$table->integer('reservation_id')->unsigned()->index('fk_reservation_room_reservations1_idx');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservation_room');
	}

}
