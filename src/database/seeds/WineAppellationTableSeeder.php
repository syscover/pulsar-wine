<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Appellation;

class WineAppellationTableSeeder extends Seeder {

    public function run()
    {
        Appellation::insert([
            ['id' => 1,         'lang_id' => 'es',      'name' => 'Rioja',                                  'data_lang' => ['es']],
            ['id' => 2,         'lang_id' => 'es',      'name' => 'Ribera del Duero',                       'data_lang' => ['es']],
            ['id' => 3,         'lang_id' => 'es',      'name' => 'Priorat',                                'data_lang' => ['es']],
            ['id' => 4,         'lang_id' => 'es',      'name' => 'Condado de Huelva',                      'data_lang' => ['es']],
            ['id' => 5,         'lang_id' => 'es',      'name' => 'Jerez-Xérès-Sherry',                     'data_lang' => ['es']],
            ['id' => 6,         'lang_id' => 'es',      'name' => 'Málaga',                                 'data_lang' => ['es']],
            ['id' => 7,         'lang_id' => 'es',      'name' => 'Manzanilla Sanlúcar de Barrameda',       'data_lang' => ['es']],
            ['id' => 8,         'lang_id' => 'es',      'name' => 'Montilla-Moriles',                       'data_lang' => ['es']],
            ['id' => 9,         'lang_id' => 'es',      'name' => 'Sierras de Málaga',                      'data_lang' => ['es']],
            ['id' => 10,        'lang_id' => 'es',      'name' => 'Calatayud',                              'data_lang' => ['es']],
            ['id' => 11,        'lang_id' => 'es',      'name' => 'Campo de Borja',                         'data_lang' => ['es']],
            ['id' => 12,        'lang_id' => 'es',      'name' => 'Cariñena',                               'data_lang' => ['es']],
            ['id' => 13,        'lang_id' => 'es',      'name' => 'Somontano',                              'data_lang' => ['es']],
            ['id' => 14,        'lang_id' => 'es',      'name' => 'Binissalem',                             'data_lang' => ['es']],
            ['id' => 15,        'lang_id' => 'es',      'name' => 'Pla i Llevant',                          'data_lang' => ['es']],
            ['id' => 16,        'lang_id' => 'es',      'name' => 'Abona',                                  'data_lang' => ['es']],
            ['id' => 17,        'lang_id' => 'es',      'name' => 'El Hierro',                              'data_lang' => ['es']],
            ['id' => 18,        'lang_id' => 'es',      'name' => 'Gran Canaria',                           'data_lang' => ['es']],
            ['id' => 19,        'lang_id' => 'es',      'name' => 'Islas Canarias',                         'data_lang' => ['es']],
            ['id' => 20,        'lang_id' => 'es',      'name' => 'La Gomera',                              'data_lang' => ['es']],
            ['id' => 21,        'lang_id' => 'es',      'name' => 'La Palma',                               'data_lang' => ['es']],
            ['id' => 22,        'lang_id' => 'es',      'name' => 'Lanzarote',                              'data_lang' => ['es']],
            ['id' => 23,        'lang_id' => 'es',      'name' => 'Tacoronte-Acentejo',                     'data_lang' => ['es']],
            ['id' => 24,        'lang_id' => 'es',      'name' => 'Valle Güimar',                           'data_lang' => ['es']],
            ['id' => 25,        'lang_id' => 'es',      'name' => 'Valle de la Orotava',                    'data_lang' => ['es']],
            ['id' => 26,        'lang_id' => 'es',      'name' => 'Ycoden-Daute-Isora',                     'data_lang' => ['es']],
            ['id' => 27,        'lang_id' => 'es',      'name' => 'Arlanza',                                'data_lang' => ['es']],
            ['id' => 28,        'lang_id' => 'es',      'name' => 'Arribes',                                'data_lang' => ['es']],
            ['id' => 29,        'lang_id' => 'es',      'name' => 'Bierzo',                                 'data_lang' => ['es']],
            ['id' => 30,        'lang_id' => 'es',      'name' => 'Cigales',                                'data_lang' => ['es']],
            ['id' => 31,        'lang_id' => 'es',      'name' => 'Rueda',                                  'data_lang' => ['es']],
            ['id' => 32,        'lang_id' => 'es',      'name' => 'Tierra de León',                         'data_lang' => ['es']],
            ['id' => 33,        'lang_id' => 'es',      'name' => 'Tierra del Vino de Zamora',              'data_lang' => ['es']],
            ['id' => 34,        'lang_id' => 'es',      'name' => 'Toro',                                   'data_lang' => ['es']],
            ['id' => 35,        'lang_id' => 'es',      'name' => 'Almansa',                                'data_lang' => ['es']],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineAppellationTableSeeder"
 */