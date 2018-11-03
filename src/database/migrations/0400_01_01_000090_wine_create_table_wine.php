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
                $table->integer('year')->nullable();
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