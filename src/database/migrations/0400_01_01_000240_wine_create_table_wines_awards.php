<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTableWinesAwards extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (! Schema::hasTable('wine_wines_awards'))
		{
			Schema::create('wine_wines_awards', function (Blueprint $table) {
				$table->engine = 'InnoDB';
				
				$table->integer('wine_id')->unsigned();
				$table->integer('award_id')->unsigned();

				$table->primary(['wine_id', 'award_id'], 'pk01_wine_wines_awards');
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
		Schema::dropIfExists('wine_wines_awards');
	}
}