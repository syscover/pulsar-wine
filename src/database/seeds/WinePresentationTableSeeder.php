<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Presentation;

class WinePresentationTableSeeder extends Seeder {

    public function run()
    {
        Presentation::insert([
            ['id' => 1,     'lang_id' => 'es',      'name' => 'Botella media (37,5 cl)',            'data_lang' => '["es"]'],
            ['id' => 2,     'lang_id' => 'es',      'name' => 'Botela (75 cl)',                     'data_lang' => '["es"]'],
            ['id' => 3,     'lang_id' => 'es',      'name' => 'Magnun (1,5 l)',                     'data_lang' => '["es"]'],
            ['id' => 4,     'lang_id' => 'es',      'name' => 'Doble Magnum (3 l)',                 'data_lang' => '["es"]'],
            ['id' => 5,     'lang_id' => 'es',      'name' => 'Jeroboam (4,5 l)',                   'data_lang' => '["es"]'],
            ['id' => 6,     'lang_id' => 'es',      'name' => 'Imperial (6 l)',                     'data_lang' => '["es"]'],
            ['id' => 7,     'lang_id' => 'es',      'name' => 'Salmanazar (9 l)',                   'data_lang' => '["es"]'],
            ['id' => 8,     'lang_id' => 'es',      'name' => 'Baltasar (12 l)',                    'data_lang' => '["es"]'],
            ['id' => 9,     'lang_id' => 'es',      'name' => 'Nabucodonosor (15 l)',               'data_lang' => '["es"]'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WinePresentationTableSeeder"
 */