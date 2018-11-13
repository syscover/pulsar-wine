<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Pairing;

class WinePairingTableSeeder extends Seeder {

    public function run()
    {
        Pairing::insert([
            ['id' => 1,         'lang_id' => 'es',      'name' => 'Carnes',                                 'data_lang' => ['es']],
            ['id' => 2,         'lang_id' => 'es',      'name' => 'Carnes rojas',                           'data_lang' => ['es']],
            ['id' => 3,         'lang_id' => 'es',      'name' => 'Carnes blancas',                         'data_lang' => ['es']],
            ['id' => 4,         'lang_id' => 'es',      'name' => 'Carnes de caza',                         'data_lang' => ['es']],
            ['id' => 5,         'lang_id' => 'es',      'name' => 'Carnes asadas',                          'data_lang' => ['es']],
            ['id' => 6,         'lang_id' => 'es',      'name' => 'Carnes a la parrilla',                   'data_lang' => ['es']],
            ['id' => 7,         'lang_id' => 'es',      'name' => 'Carnes asadas',                          'data_lang' => ['es']],
            ['id' => 8,         'lang_id' => 'es',      'name' => 'Carnes en salsa',                        'data_lang' => ['es']],
            ['id' => 9,         'lang_id' => 'es',      'name' => 'Cerdo',                                  'data_lang' => ['es']],
            ['id' => 10,        'lang_id' => 'es',      'name' => 'Cordero',                                'data_lang' => ['es']],
            ['id' => 11,        'lang_id' => 'es',      'name' => 'Aves',                                   'data_lang' => ['es']],
            ['id' => 12,        'lang_id' => 'es',      'name' => 'Pavo',                                   'data_lang' => ['es']],
            ['id' => 13,        'lang_id' => 'es',      'name' => 'Pollo',                                  'data_lang' => ['es']],
            ['id' => 14,        'lang_id' => 'es',      'name' => 'Pollo asado',                            'data_lang' => ['es']],
            ['id' => 15,        'lang_id' => 'es',      'name' => 'Pollo a la parrilla',                    'data_lang' => ['es']],
            ['id' => 16,        'lang_id' => 'es',      'name' => 'Pescados',                               'data_lang' => ['es']],
            ['id' => 17,        'lang_id' => 'es',      'name' => 'Pescados azules',                        'data_lang' => ['es']],
            ['id' => 18,        'lang_id' => 'es',      'name' => 'Pescados blancos',                       'data_lang' => ['es']],
            ['id' => 19,        'lang_id' => 'es',      'name' => 'Pescados grasos',                        'data_lang' => ['es']],
            ['id' => 20,        'lang_id' => 'es',      'name' => 'Pescados semigrasos',                    'data_lang' => ['es']],
            ['id' => 21,        'lang_id' => 'es',      'name' => 'Pescados a la parrilla',                 'data_lang' => ['es']],
            ['id' => 22,        'lang_id' => 'es',      'name' => 'Pescados asados',                        'data_lang' => ['es']],
            ['id' => 23,        'lang_id' => 'es',      'name' => 'Pescados en salsa',                      'data_lang' => ['es']],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WinePairingTableSeeder"
 */