<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTableWine extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('wine_wine'))
		{
			Schema::create('wine_wine', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('id');

                $table->integer('type_id')->unsigned();                             // Red, white, etc.
                $table->integer('family_id')->unsigned()->nullable();               // Ecological, kosher, etc.

                $table->smallInteger('vintage')->unsigned()->nullable();            // Year of wine

                // relations columns
                $table->integer('winery_id')->unsigned();                           // Bodega
                $table->integer('appellation_id')->unsigned();                      // DO

                // size of bottle
                $table->integer('presentation_id')->unsigned()->nullable();

                // alcohol by volume
                $table->decimal('abv', 4, 2)->nullable();

                // geolocation data
                $table->string('country_id', 2);
                $table->string('territorial_area_1_id', 6)->nullable();
                $table->string('territorial_area_2_id', 10)->nullable();
                $table->string('territorial_area_3_id', 10)->nullable();

                // scores
                $table->decimal('score_average', 5, 2)->nullable();
                $table->tinyInteger('parker')->unsigned()->nullable();
                $table->tinyInteger('suckling')->unsigned()->nullable();
                $table->tinyInteger('penin')->unsigned()->nullable();
                $table->tinyInteger('decanter')->unsigned()->nullable();
                $table->tinyInteger('wine_spectator')->unsigned()->nullable();

                $table->boolean('is_product')->default(false);
                $table->integer('product_id')->unsigned()->nullable();
                $table->json('data_lang')->nullable();
                $table->json('data')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->foreign('product_id', 'fk01_wine_wine')
                    ->references('id')
                    ->on('market_product')
                    ->onDelete('set null')
                    ->onUpdate('cascade');
                $table->foreign('family_id', 'fk02_wine_wine')
                    ->references('id')
                    ->on('wine_family')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('type_id', 'fk03_wine_wine')
                    ->references('id')
                    ->on('wine_type')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('winery_id', 'fk04_wine_wine')
                    ->references('id')
                    ->on('wine_winery')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('appellation_id', 'fk05_wine_wine')
                    ->references('id')
                    ->on('wine_appellation')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('presentation_id', 'fk06_wine_wine')
                    ->references('id')
                    ->on('wine_presentation')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('country_id', 'fk07_wine_wine')
                    ->references('id')
                    ->on('admin_country')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_1_id', 'fk08_wine_wine')
                    ->references('id')
                    ->on('admin_territorial_area_1')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_2_id', 'fk09_wine_wine')
                    ->references('id')
                    ->on('admin_territorial_area_2')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
                $table->foreign('territorial_area_3_id', 'fk10_wine_wine')
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
        Schema::dropIfExists('wine_wine');
	}
}