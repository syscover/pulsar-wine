<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTablePairing extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('wine_pairing'))
		{
			Schema::create('wine_pairing', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('ix');
                $table->integer('id')->unsigned();
                $table->string('lang_id', 2);
                $table->string('name');
                $table->string('slug');
                $table->json('data_lang')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->index(['id', 'lang_id'], 'ix01_wine_pairing');
                $table->index('slug', 'ix02_wine_pairing');
                $table->foreign('lang_id', 'fk01_wine_pairing')
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
        Schema::dropIfExists('wine_pairing');
	}
}