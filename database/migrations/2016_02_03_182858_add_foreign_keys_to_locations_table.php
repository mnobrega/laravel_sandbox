<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('locations', function(Blueprint $table)
		{
			$table->foreign('city_id', 'fk_locations_cities1')->references('id')->on('cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('country_id', 'fk_locations_countries1')->references('id')->on('countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('state_id', 'fk_locations_states1')->references('id')->on('states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('locations', function(Blueprint $table)
		{
			$table->dropForeign('fk_locations_cities1');
			$table->dropForeign('fk_locations_countries1');
			$table->dropForeign('fk_locations_states1');
		});
	}

}
