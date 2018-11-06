<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MarketCreateTableWinesPairings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (! Schema::hasTable('wine_wines_pairings'))
		{
			Schema::create('wine_wines_pairings', function (Blueprint $table) {
				$table->engine = 'InnoDB';
				
				$table->integer('wine_id')->unsigned();
				$table->integer('pairing_id')->unsigned();

				$table->primary(['wine_id', 'pairing_id'], 'pk01_wine_wines_pairings');
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
		Schema::dropIfExists('wine_wines_pairings');
	}
}