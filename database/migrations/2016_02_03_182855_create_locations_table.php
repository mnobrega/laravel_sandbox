<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('latitude', 9, 6)->nullable();
			$table->decimal('longitude', 9, 6)->nullable();
			$table->string('address_1', 250)->nullable();
			$table->string('address_2', 250)->nullable();
			$table->integer('city_id')->unsigned()->index('fk_locations_cities1_idx');
			$table->integer('state_id')->unsigned()->index('fk_locations_states1_idx');
			$table->integer('country_id')->unsigned()->index('fk_locations_countries1_idx');
			$table->string('code', 30)->nullable();
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
		Schema::drop('locations');
	}

}
