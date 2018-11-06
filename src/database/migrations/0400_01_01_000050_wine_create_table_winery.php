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

                // geolocation data
                $table->string('country_id', 2)->nullable();
                $table->string('territorial_area_1_id', 6)->nullable();
                $table->string('territorial_area_2_id', 10)->nullable();
                $table->string('territorial_area_3_id', 10)->nullable();
                $table->string('zip')->nullable();
                $table->string('locality')->nullable();
                $table->string('address')->nullable();
                $table->decimal('latitude', 17, 14)->nullable();
                $table->decimal('longitude', 17, 14)->nullable();

                $table->json('data_lang')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->index('slug', 'ix01_wine_winery');
                $table->foreign('lang_id', 'fk01_wine_winery')
                    ->references('id')
                    ->on('admin_lang')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('country_id', 'fk02_wine_winery')
                    ->references('id')
                    ->on('admin_country')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_1_id', 'fk03_wine_winery')
                    ->references('id')
                    ->on('admin_territorial_area_1')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_2_id', 'fk04_wine_winery')
                    ->references('id')
                    ->on('admin_territorial_area_2')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_3_id', 'fk05_wine_winery')
                    ->references('id')
                    ->on('admin_territorial_area_3')
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