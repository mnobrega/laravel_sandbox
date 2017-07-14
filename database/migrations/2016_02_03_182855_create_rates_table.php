<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('room_id')->unsigned()->index('fk_rates_rooms1_idx');
			$table->integer('currency_id')->unsigned()->index('fk_rates_currencies1_idx');
			$table->decimal('rate', 10, 0)->unsigned()->nullable();
			$table->date('date_start')->nullable();
			$table->date('date_end')->nullable();
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
		Schema::drop('rates');
	}

}
