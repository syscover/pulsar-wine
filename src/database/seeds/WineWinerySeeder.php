<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Winery;
use Syscover\Wine\Models\WineryLang;

class WineWinerySeeder extends Seeder {

    public function run()
    {
        Winery::insert([
            ['id' => 1,         'name' => 'Bodegas Protos',     'slug' => 'bodegas-protos',     'country_id' => 'ES',     'data_lang' => '["es"]']
        ]);

        WineryLang::insert([
            ['id' => 1,         'lang_id' => 'es']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineWinerySeeder"
 */
