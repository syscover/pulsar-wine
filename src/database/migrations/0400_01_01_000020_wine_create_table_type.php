<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WineCreateTableType extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('wine_type'))
		{
			Schema::create('wine_type', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->integer('id')->unsigned();
                $table->string('lang_id', 2);
                $table->string('name');

                $table->timestamps();
                $table->softDeletes();

                $table->primary(['id', 'lang_id'], 'pk01_wine_type');
                $table->foreign('lang_id', 'fk01_wine_type')
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
        Schema::dropIfExists('wine_type');
	}
}