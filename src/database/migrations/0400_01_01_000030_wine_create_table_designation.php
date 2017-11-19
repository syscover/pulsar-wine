<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDesignation extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('wine_designation'))
		{
			Schema::create('wine_designation', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('id');
                $table->string('country_id', 2);
                $table->string('name');

                $table->timestamps();
                $table->softDeletes();

                $table->primary(['id', 'lang_id'], 'pk01_wine_designation');
                $table->foreign('country_id', 'fk02_wine_designation')
                    ->references('id')
                    ->on('admin_country')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('wine_designation');
	}
}