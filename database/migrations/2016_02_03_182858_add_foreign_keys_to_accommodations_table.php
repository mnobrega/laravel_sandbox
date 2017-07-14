<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAccommodationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('accommodations', function(Blueprint $table)
		{
			$table->foreign('location_id', 'fk_accommodations_locations1')->references('id')->on('locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('accommodations', function(Blueprint $table)
		{
			$table->dropForeign('fk_accommodations_locations1');
		});
	}

}
