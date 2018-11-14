<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Appellation;

class WineAppellationTableSeeder extends Seeder {

    public function run()
    {
        Appellation::insert([
            ['id' => 1,         'lang_id' => 'es',      'name' => 'Rioja',                                  'slug' => 'rioja',                                  'data_lang' => '["es"]'],
            ['id' => 2,         'lang_id' => 'es',      'name' => 'Ribera del Duero',                       'slug' => 'ribera-del-duero',                       'data_lang' => '["es"]'],
            ['id' => 3,         'lang_id' => 'es',      'name' => 'Priorat',                                'slug' => 'priorat',                                'data_lang' => '["es"]'],
            ['id' => 4,         'lang_id' => 'es',      'name' => 'Condado de Huelva',                      'slug' => 'condado-de-huelva',                      'data_lang' => '["es"]'],
            ['id' => 5,         'lang_id' => 'es',      'name' => 'Jerez-Xérès-Sherry',                     'slug' => 'jerez-xeres-sherry',                     'data_lang' => '["es"]'],
            ['id' => 6,         'lang_id' => 'es',      'name' => 'Málaga',                                 'slug' => 'malaga',                                 'data_lang' => '["es"]'],
            ['id' => 7,         'lang_id' => 'es',      'name' => 'Manzanilla Sanlúcar de Barrameda',       'slug' => 'manzanilla-sanlucar-de-barrameda',       'data_lang' => '["es"]'],
            ['id' => 8,         'lang_id' => 'es',      'name' => 'Montilla-Moriles',                       'slug' => 'montilla-moriles',                       'data_lang' => '["es"]'],
            ['id' => 9,         'lang_id' => 'es',      'name' => 'Sierras de Málaga',                      'slug' => 'sierras-de-malaga',                      'data_lang' => '["es"]'],
            ['id' => 10,        'lang_id' => 'es',      'name' => 'Calatayud',                              'slug' => 'calatayud',                              'data_lang' => '["es"]'],
            ['id' => 11,        'lang_id' => 'es',      'name' => 'Campo de Borja',                         'slug' => 'campo-de-borja',                         'data_lang' => '["es"]'],
            ['id' => 12,        'lang_id' => 'es',      'name' => 'Cariñena',                               'slug' => 'carinena',                               'data_lang' => '["es"]'],
            ['id' => 13,        'lang_id' => 'es',      'name' => 'Somontano',                              'slug' => 'somontano',                              'data_lang' => '["es"]'],
            ['id' => 14,        'lang_id' => 'es',      'name' => 'Binissalem',                             'slug' => 'binissalem',                             'data_lang' => '["es"]'],
            ['id' => 15,        'lang_id' => 'es',      'name' => 'Pla i Llevant',                          'slug' => 'pla-i-llevant',                          'data_lang' => '["es"]'],
            ['id' => 16,        'lang_id' => 'es',      'name' => 'Abona',                                  'slug' => 'abona',                                  'data_lang' => '["es"]'],
            ['id' => 17,        'lang_id' => 'es',      'name' => 'El Hierro',                              'slug' => 'el-hierro',                              'data_lang' => '["es"]'],
            ['id' => 18,        'lang_id' => 'es',      'name' => 'Gran Canaria',                           'slug' => 'gran-canaria',                           'data_lang' => '["es"]'],
            ['id' => 19,        'lang_id' => 'es',      'name' => 'Islas Canarias',                         'slug' => 'islas-canarias',                         'data_lang' => '["es"]'],
            ['id' => 20,        'lang_id' => 'es',      'name' => 'La Gomera',                              'slug' => 'la-gomera',                              'data_lang' => '["es"]'],
            ['id' => 21,        'lang_id' => 'es',      'name' => 'La Palma',                               'slug' => 'la-palma',                               'data_lang' => '["es"]'],
            ['id' => 22,        'lang_id' => 'es',      'name' => 'Lanzarote',                              'slug' => 'lanzarote',                              'data_lang' => '["es"]'],
            ['id' => 23,        'lang_id' => 'es',      'name' => 'Tacoronte-Acentejo',                     'slug' => 'tacoronte-acentejo',                     'data_lang' => '["es"]'],
            ['id' => 24,        'lang_id' => 'es',      'name' => 'Valle Güimar',                           'slug' => 'valle-guimar',                           'data_lang' => '["es"]'],
            ['id' => 25,        'lang_id' => 'es',      'name' => 'Valle de la Orotava',                    'slug' => 'valle-de-la-orotava',                    'data_lang' => '["es"]'],
            ['id' => 26,        'lang_id' => 'es',      'name' => 'Ycoden-Daute-Isora',                     'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 27,        'lang_id' => 'es',      'name' => 'Arlanza',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 28,        'lang_id' => 'es',      'name' => 'Arribes',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 29,        'lang_id' => 'es',      'name' => 'Bierzo',                                 'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 30,        'lang_id' => 'es',      'name' => 'Cigales',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 31,        'lang_id' => 'es',      'name' => 'Rueda',                                  'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 32,        'lang_id' => 'es',      'name' => 'Tierra de León',                         'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 33,        'lang_id' => 'es',      'name' => 'Tierra del Vino de Zamora',              'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 34,        'lang_id' => 'es',      'name' => 'Toro',                                   'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 35,        'lang_id' => 'es',      'name' => 'Almansa',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 36,        'lang_id' => 'es',      'name' => 'La Mancha',                              'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 37,        'lang_id' => 'es',      'name' => 'Manchuela',                              'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 38,        'lang_id' => 'es',      'name' => 'Méntrida',                               'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 39,        'lang_id' => 'es',      'name' => 'Mondéjar',                               'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 40,        'lang_id' => 'es',      'name' => 'Ribera del Júcar',                       'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 41,        'lang_id' => 'es',      'name' => 'Uclés',                                  'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 42,        'lang_id' => 'es',      'name' => 'Valdepeñas',                             'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 43,        'lang_id' => 'es',      'name' => 'Alella',                                 'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 44,        'lang_id' => 'es',      'name' => 'Catalunya',                              'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 45,        'lang_id' => 'es',      'name' => 'Conca de Barberá',                       'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 46,        'lang_id' => 'es',      'name' => 'Costers del Segre',                      'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 47,        'lang_id' => 'es',      'name' => 'Empordá',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 48,        'lang_id' => 'es',      'name' => 'Montsant',                               'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 49,        'lang_id' => 'es',      'name' => 'Penedés',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 50,        'lang_id' => 'es',      'name' => 'Pla de Bages',                           'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 51,        'lang_id' => 'es',      'name' => 'Tarragona',                              'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 52,        'lang_id' => 'es',      'name' => 'Terra Alta',                             'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 53,        'lang_id' => 'es',      'name' => 'Alicante',                               'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 54,        'lang_id' => 'es',      'name' => 'Utiel-Requena',                          'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 55,        'lang_id' => 'es',      'name' => 'Valencia',                               'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 56,        'lang_id' => 'es',      'name' => 'Ribera del Guadiana',                    'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 57,        'lang_id' => 'es',      'name' => 'Monterrei',                              'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 58,        'lang_id' => 'es',      'name' => 'Rías Baixas',                            'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 59,        'lang_id' => 'es',      'name' => 'Ribeira Sacra',                          'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 60,        'lang_id' => 'es',      'name' => 'Ribeiro',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 61,        'lang_id' => 'es',      'name' => 'Valdeorras',                             'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 62,        'lang_id' => 'es',      'name' => 'Vinos de Madrid',                        'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 63,        'lang_id' => 'es',      'name' => 'Bullas',                                 'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 64,        'lang_id' => 'es',      'name' => 'Yecla',                                  'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 65,        'lang_id' => 'es',      'name' => 'Navarra',                                'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 66,        'lang_id' => 'es',      'name' => 'Chacolí de Álava',                       'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 67,        'lang_id' => 'es',      'name' => 'Chacolí de Bizkaia',                     'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 68,        'lang_id' => 'es',      'name' => 'Chacolí de Guetaria',                    'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 69,        'lang_id' => 'es',      'name' => 'Cava',                                   'slug' => '',               'data_lang' => '["es"]'],
            ['id' => 70,        'lang_id' => 'es',      'name' => 'Jumilla ',                               'slug' => '',               'data_lang' => '["es"]'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineAppellationTableSeeder"
 */