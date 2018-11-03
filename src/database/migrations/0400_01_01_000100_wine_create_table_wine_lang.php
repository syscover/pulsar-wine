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
				$table->string('tasting_note')->nullable();
                $table->json('data')->nullable();

                $table->timestamps();
                $table->softDeletes();
				
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

                $table->index(['id', 'lang_id'], 'ix01_wine_wine_lang');
                $table->index('slug', 'ix02_wine_wine_lang');
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