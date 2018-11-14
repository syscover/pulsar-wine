<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Pairing;

class WinePairingTableSeeder extends Seeder {

    public function run()
    {
        Pairing::insert([
            // carnes
            ['id' => 1,         'lang_id' => 'es',      'name' => 'Carnes',                         'slug' => 'carnes',                   'data_lang' => '["es"]'],
            ['id' => 2,         'lang_id' => 'es',      'name' => 'Carnes rojas',                   'slug' => 'carnes-rojas',        'data_lang' => '["es"]'],
            ['id' => 3,         'lang_id' => 'es',      'name' => 'Carnes blancas',                 'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 4,         'lang_id' => 'es',      'name' => 'Carnes de caza',                 'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 5,         'lang_id' => 'es',      'name' => 'Carnes asadas',                  'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 6,         'lang_id' => 'es',      'name' => 'Carnes a la parrilla',           'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 7,         'lang_id' => 'es',      'name' => 'Carnes asadas',                  'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 8,         'lang_id' => 'es',      'name' => 'Carnes en salsa',                'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 9,         'lang_id' => 'es',      'name' => 'Cerdo',                          'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 10,        'lang_id' => 'es',      'name' => 'Cordero',                        'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 11,        'lang_id' => 'es',      'name' => 'Ciervo',                         'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 12,        'lang_id' => 'es',      'name' => 'Aves',                           'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 13,        'lang_id' => 'es',      'name' => 'Pavo',                           'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 14,        'lang_id' => 'es',      'name' => 'Pollo',                          'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 15,        'lang_id' => 'es',      'name' => 'Pollo asado',                    'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 16,        'lang_id' => 'es',      'name' => 'Pollo a la parrilla',            'slug' => '',                   'data_lang' => '["es"]'],
            // pescados
            ['id' => 17,        'lang_id' => 'es',      'name' => 'Pescados',                       'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 18,        'lang_id' => 'es',      'name' => 'Pescados azules',                'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 19,        'lang_id' => 'es',      'name' => 'Pescados blancos',               'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 20,        'lang_id' => 'es',      'name' => 'Pescados grasos',                'slug' => 'pescados-grasos',            'data_lang' => '["es"]'],
            ['id' => 21,        'lang_id' => 'es',      'name' => 'Pescados semigrasos',            'slug' => 'pescados-semigrasos',        'data_lang' => '["es"]'],
            ['id' => 22,        'lang_id' => 'es',      'name' => 'Pescados a la parrilla',         'slug' => 'pescados-a-la-parrilla',     'data_lang' => '["es"]'],
            ['id' => 23,        'lang_id' => 'es',      'name' => 'Pescados asados',                'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 24,        'lang_id' => 'es',      'name' => 'Pescados en salsa',              'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 25,        'lang_id' => 'es',      'name' => 'Pescados fritos',                'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 26,        'lang_id' => 'es',      'name' => 'Rape',                           'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 27,        'lang_id' => 'es',      'name' => 'Salmón',                         'slug' => '',                   'data_lang' => '["es"]'],
            // arroces
            ['id' => 28,        'lang_id' => 'es',      'name' => 'Arroces',                        'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 29,        'lang_id' => 'es',      'name' => 'Arroces con carne',              'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 30,        'lang_id' => 'es',      'name' => 'Arroces con pescado',            'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 31,        'lang_id' => 'es',      'name' => 'Risottos',                       'slug' => '',                   'data_lang' => '["es"]'],
            // comidas
            ['id' => 32,        'lang_id' => 'es',      'name' => 'Aperitivos',                     'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 33,        'lang_id' => 'es',      'name' => 'Ahumados',                       'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 34,        'lang_id' => 'es',      'name' => 'Asados',                         'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 35,        'lang_id' => 'es',      'name' => 'Ceviches',                       'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 36,        'lang_id' => 'es',      'name' => 'Cocidos',                        'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 37,        'lang_id' => 'es',      'name' => 'Embutidos',                      'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 38,        'lang_id' => 'es',      'name' => 'Escabeches',                     'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 39,        'lang_id' => 'es',      'name' => 'Fabada',                         'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 39,        'lang_id' => 'es',      'name' => 'Frituras',                       'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 40,        'lang_id' => 'es',      'name' => 'Guisos',                         'slug' => '',                   'data_lang' => '["es"]'],
            ['id' => 41,        'lang_id' => 'es',      'name' => 'Guisos con setas',               'slug' => '',                   'data_lang' => '["es"]'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WinePairingTableSeeder"
 */