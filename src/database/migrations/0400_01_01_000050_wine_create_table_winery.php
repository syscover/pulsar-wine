<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTableWinery extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('wine_winery'))
		{
			Schema::create('wine_winery', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('id');
                $table->string('name');
                $table->string('slug');
                $table->string('country_id', 2);
                $table->json('data_lang')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->index('slug', 'ix01_wine_winery');
                $table->foreign('country_id', 'fk01_wine_winery')
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
        Schema::dropIfExists('wine_winery');
	}
}