<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('room_number', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('accommodation_id')->unsigned()->index('fk_rooms_accommodations_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rooms');
	}

}
