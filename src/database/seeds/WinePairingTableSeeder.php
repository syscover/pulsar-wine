<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Pairing;

class WinePairingTableSeeder extends Seeder {

    public function run()
    {
        Pairing::insert([
            // carnes
            ['id' => 1,         'lang_id' => 'es',      'name' => 'Carnes',                                 'data_lang' => '["es"]'],
            ['id' => 2,         'lang_id' => 'es',      'name' => 'Carnes rojas',                           'data_lang' => '["es"]'],
            ['id' => 3,         'lang_id' => 'es',      'name' => 'Carnes blancas',                         'data_lang' => '["es"]'],
            ['id' => 4,         'lang_id' => 'es',      'name' => 'Carnes de caza',                         'data_lang' => '["es"]'],
            ['id' => 5,         'lang_id' => 'es',      'name' => 'Carnes asadas',                          'data_lang' => '["es"]'],
            ['id' => 6,         'lang_id' => 'es',      'name' => 'Carnes a la parrilla',                   'data_lang' => '["es"]'],
            ['id' => 7,         'lang_id' => 'es',      'name' => 'Carnes asadas',                          'data_lang' => '["es"]'],
            ['id' => 8,         'lang_id' => 'es',      'name' => 'Carnes en salsa',                        'data_lang' => '["es"]'],
            ['id' => 9,         'lang_id' => 'es',      'name' => 'Cerdo',                                  'data_lang' => '["es"]'],
            ['id' => 10,        'lang_id' => 'es',      'name' => 'Cordero',                                'data_lang' => '["es"]'],
            ['id' => 11,        'lang_id' => 'es',      'name' => 'Ciervo',                                 'data_lang' => '["es"]'],
            ['id' => 12,        'lang_id' => 'es',      'name' => 'Aves',                                   'data_lang' => '["es"]'],
            ['id' => 13,        'lang_id' => 'es',      'name' => 'Pavo',                                   'data_lang' => '["es"]'],
            ['id' => 14,        'lang_id' => 'es',      'name' => 'Pollo',                                  'data_lang' => '["es"]'],
            ['id' => 15,        'lang_id' => 'es',      'name' => 'Pollo asado',                            'data_lang' => '["es"]'],
            ['id' => 16,        'lang_id' => 'es',      'name' => 'Pollo a la parrilla',                    'data_lang' => '["es"]'],
            // pescados
            ['id' => 17,        'lang_id' => 'es',      'name' => 'Pescados',                               'data_lang' => '["es"]'],
            ['id' => 18,        'lang_id' => 'es',      'name' => 'Pescados azules',                        'data_lang' => '["es"]'],
            ['id' => 19,        'lang_id' => 'es',      'name' => 'Pescados blancos',                       'data_lang' => '["es"]'],
            ['id' => 20,        'lang_id' => 'es',      'name' => 'Pescados grasos',                        'data_lang' => '["es"]'],
            ['id' => 21,        'lang_id' => 'es',      'name' => 'Pescados semigrasos',                    'data_lang' => '["es"]'],
            ['id' => 22,        'lang_id' => 'es',      'name' => 'Pescados a la parrilla',                 'data_lang' => '["es"]'],
            ['id' => 23,        'lang_id' => 'es',      'name' => 'Pescados asados',                        'data_lang' => '["es"]'],
            ['id' => 24,        'lang_id' => 'es',      'name' => 'Pescados en salsa',                      'data_lang' => '["es"]'],
            ['id' => 25,        'lang_id' => 'es',      'name' => 'Pescados fritos',                        'data_lang' => '["es"]'],
            ['id' => 26,        'lang_id' => 'es',      'name' => 'Rape',                                   'data_lang' => '["es"]'],
            ['id' => 27,        'lang_id' => 'es',      'name' => 'Salmón',                                 'data_lang' => '["es"]'],
            // arroces
            ['id' => 28,        'lang_id' => 'es',      'name' => 'Arroces',                                'data_lang' => '["es"]'],
            ['id' => 29,        'lang_id' => 'es',      'name' => 'Arroces con carne',                      'data_lang' => '["es"]'],
            ['id' => 30,        'lang_id' => 'es',      'name' => 'Arroces con pescado',                    'data_lang' => '["es"]'],
            ['id' => 31,        'lang_id' => 'es',      'name' => 'Risottos',                               'data_lang' => '["es"]'],
            // comidas
            ['id' => 32,        'lang_id' => 'es',      'name' => 'Aperitivos',                             'data_lang' => '["es"]'],
            ['id' => 33,        'lang_id' => 'es',      'name' => 'Ahumados',                               'data_lang' => '["es"]'],
            ['id' => 34,        'lang_id' => 'es',      'name' => 'Asados',                                 'data_lang' => '["es"]'],
            ['id' => 35,        'lang_id' => 'es',      'name' => 'Ceviches',                               'data_lang' => '["es"]'],
            ['id' => 36,        'lang_id' => 'es',      'name' => 'Cocidos',                                'data_lang' => '["es"]'],
            ['id' => 37,        'lang_id' => 'es',      'name' => 'Embutidos',                              'data_lang' => '["es"]'],
            ['id' => 38,        'lang_id' => 'es',      'name' => 'Escabeches',                             'data_lang' => '["es"]'],
            ['id' => 39,        'lang_id' => 'es',      'name' => 'Fabada',                                 'data_lang' => '["es"]'],
            ['id' => 39,        'lang_id' => 'es',      'name' => 'Frituras',                               'data_lang' => '["es"]'],
            ['id' => 40,        'lang_id' => 'es',      'name' => 'Guisos',                                 'data_lang' => '["es"]'],
            ['id' => 41,        'lang_id' => 'es',      'name' => 'Guisos con setas',                       'data_lang' => '["es"]'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WinePairingTableSeeder"
 */