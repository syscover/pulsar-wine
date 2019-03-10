<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Type;

class WineTypeSeeder extends Seeder {

    public function run()
    {
        Type::insert([
            ['id' => 1,     'lang_id' => 'es',      'name' => 'Tinto',                  'slug' => 'tinto',                  'data_lang' => '["es"]'],
            ['id' => 2,     'lang_id' => 'es',      'name' => 'Blanco',                 'slug' => 'blanco',                 'data_lang' => '["es"]'],
            ['id' => 3,     'lang_id' => 'es',      'name' => 'Rosado',                 'slug' => 'rosado',                 'data_lang' => '["es"]'],
            ['id' => 4,     'lang_id' => 'es',      'name' => 'Espumoso',               'slug' => 'espumoso',               'data_lang' => '["es"]'],
            ['id' => 5,     'lang_id' => 'es',      'name' => 'Generoso',               'slug' => 'generoso',               'data_lang' => '["es"]'],
            ['id' => 6,     'lang_id' => 'es',      'name' => 'Dulce',                  'slug' => 'dulce',                  'data_lang' => '["es"]'],
            ['id' => 7,     'lang_id' => 'es',      'name' => 'Tinto crianza',          'slug' => 'tinto-crianza',          'data_lang' => '["es"]'],
            ['id' => 8,     'lang_id' => 'es',      'name' => 'Tinto reserva',          'slug' => 'tinto-reserva',          'data_lang' => '["es"]'],
            ['id' => 9,     'lang_id' => 'es',      'name' => 'Tinto gran reserva',     'slug' => 'tinto-gran-reserva',     'data_lang' => '["es"]'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineTypeSeeder"
 */
