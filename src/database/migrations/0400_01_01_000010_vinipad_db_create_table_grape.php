<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VinipadDbCreateTableLang extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('vinipad_db_grape'))
		{
			Schema::create('admin_lang', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->integer('id')->unsigned();
                $table->string('lang_id', 2);
                $table->string('name');

                $table->timestamps();
                $table->softDeletes();

                $table->primary(['id', 'lang_id'], 'pk01_vinipad_db_grape');
                $table->foreign('lang_id', 'fk01_vinipad_db_grape')
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
        Schema::dropIfExists('vinipad_db_grape');
	}
}