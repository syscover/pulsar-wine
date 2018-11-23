<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTableWineLang extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (! Schema::hasTable('wine_wine_lang'))
		{
			Schema::create('wine_wine_lang', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('ix');
				$table->integer('id')->unsigned();
				$table->string('lang_id', 2);
                $table->string('name');
                $table->string('slug');

                $table->text('description')->nullable();                // descripción general

                $table->string('production')->nullable();               // number of bottles produced

                // tasting
                $table->text('tasting')->nullable();                    // nota de cata
                $table->text('tasting_look')->nullable();
                $table->text('tasting_nose')->nullable();
                $table->text('tasting_mouth')->nullable();
                $table->text('tasting_temperature')->nullable();        // temperatura de servicio
                $table->text('tasting_consumption')->nullable();        // consumo óptimo

                // vineyard
                $table->text('vineyard')->nullable();                   // elaboracón y crianza
                $table->text('vineyard_name')->nullable();              // nombre del viñedo
                $table->text('vineyard_area')->nullable();              // metros cuadrados del viñedo
                $table->text('vineyard_description')->nullable();
                $table->text('vineyard_age')->nullable();               // edad del viñedo
                $table->text('vineyard_soil')->nullable();              // suelo del viñedo
                $table->text('vineyard_weather')->nullable();           // clima del viñedo
                $table->text('vineyard_performance')->nullable();       // rendimiento del viñedo
                $table->text('vineyard_vintage')->nullable();           // vendimia realizada en el viñedo
                $table->text('vineyard_vinification')->nullable();      // vinificación del viñedo
                $table->text('vineyard_aging')->nullable();             // envejecimiento
                $table->text('vineyard_bottling')->nullable();          // embotellado

                $table->json('data')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->index(['id', 'lang_id'], 'ix01_wine_wine_lang');
                $table->index('slug', 'ix02_wine_wine_lang');
				$table->foreign('id', 'fk01_wine_wine_lang')
					->references('id')
					->on('wine_wine')
					->onDelete('cascade')
					->onUpdate('cascade');
				$table->foreign('lang_id', 'fk02_wine_wine_lang')
					->references('id')
					->on('admin_lang')
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
		Schema::dropIfExists('wine_wine_lang');
	}
}