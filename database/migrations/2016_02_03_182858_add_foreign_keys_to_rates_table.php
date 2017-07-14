<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rates', function(Blueprint $table)
		{
			$table->foreign('currency_id', 'fk_rates_currencies1')->references('id')->on('currencies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('room_id', 'fk_rates_rooms1')->references('id')->on('rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rates', function(Blueprint $table)
		{
			$table->dropForeign('fk_rates_currencies1');
			$table->dropForeign('fk_rates_rooms1');
		});
	}

}
