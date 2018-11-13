<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Type;

class WineTypeTableSeeder extends Seeder {

    public function run()
    {
        Type::insert([
            ['id' => 1,     'lang_id' => 'es',      'name' => 'Tinto',                  'data_lang' => '["es"]'],
            ['id' => 2,     'lang_id' => 'es',      'name' => 'Blanco',                 'data_lang' => '["es"]'],
            ['id' => 3,     'lang_id' => 'es',      'name' => 'Rosado',                 'data_lang' => '["es"]'],
            ['id' => 4,     'lang_id' => 'es',      'name' => 'Espumoso',               'data_lang' => '["es"]'],
            ['id' => 5,     'lang_id' => 'es',      'name' => 'Generoso',               'data_lang' => '["es"]'],
            ['id' => 6,     'lang_id' => 'es',      'name' => 'Dulce',                  'data_lang' => '["es"]'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineTypeTableSeeder"
 */