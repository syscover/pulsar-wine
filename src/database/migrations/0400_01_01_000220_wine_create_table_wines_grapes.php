<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTableWinesGrapes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (! Schema::hasTable('wine_wines_grapes'))
		{
			Schema::create('wine_wines_grapes', function (Blueprint $table) {
				$table->engine = 'InnoDB';
				
				$table->integer('wine_id')->unsigned();
				$table->integer('grape_id')->unsigned();
                $table->decimal('percentage', 5, 2)->nullable();

				$table->primary(['wine_id', 'grape_id'], 'pk01_wine_wines_grapes');
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
		Schema::dropIfExists('wine_wines_grapes');
	}
}