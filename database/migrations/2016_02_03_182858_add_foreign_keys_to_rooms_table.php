<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rooms', function(Blueprint $table)
		{
			$table->foreign('accommodation_id', 'fk_rooms_accommodations')->references('id')->on('accommodations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rooms', function(Blueprint $table)
		{
			$table->dropForeign('fk_rooms_accommodations');
		});
	}

}
