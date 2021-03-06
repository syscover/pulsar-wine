<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTableWineriesAppellations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (! Schema::hasTable('wine_wineries_appellations'))
		{
			Schema::create('wine_wineries_appellations', function (Blueprint $table) {
				$table->engine = 'InnoDB';
				
				$table->integer('winery_id')->unsigned();
				$table->integer('appellation_id')->unsigned();

				$table->primary(['winery_id', 'appellation_id']);
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('wine_wineries_appellations');
	}
}