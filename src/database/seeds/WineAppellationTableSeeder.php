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
            ['id' => 36,        'lang_id' => 'es',      'name' => 'La Mancha',                              'data_lang' => ['es']],
            ['id' => 37,        'lang_id' => 'es',      'name' => 'Manchuela',                              'data_lang' => ['es']],
            ['id' => 38,        'lang_id' => 'es',      'name' => 'Méntrida',                               'data_lang' => ['es']],
            ['id' => 39,        'lang_id' => 'es',      'name' => 'Mondéjar',                               'data_lang' => ['es']],
            ['id' => 40,        'lang_id' => 'es',      'name' => 'Ribera del Júcar',                       'data_lang' => ['es']],
            ['id' => 41,        'lang_id' => 'es',      'name' => 'Uclés',                                  'data_lang' => ['es']],
            ['id' => 42,        'lang_id' => 'es',      'name' => 'Valdepeñas',                             'data_lang' => ['es']],
            ['id' => 43,        'lang_id' => 'es',      'name' => 'Alella',                                 'data_lang' => ['es']],
            ['id' => 44,        'lang_id' => 'es',      'name' => 'Catalunya',                              'data_lang' => ['es']],
            ['id' => 45,        'lang_id' => 'es',      'name' => 'Conca de Barberá',                       'data_lang' => ['es']],
            ['id' => 46,        'lang_id' => 'es',      'name' => 'Costers del Segre',                      'data_lang' => ['es']],
            ['id' => 47,        'lang_id' => 'es',      'name' => 'Empordá',                                'data_lang' => ['es']],
            ['id' => 48,        'lang_id' => 'es',      'name' => 'Montsant',                               'data_lang' => ['es']],
            ['id' => 49,        'lang_id' => 'es',      'name' => 'Penedés',                                'data_lang' => ['es']],
            ['id' => 50,        'lang_id' => 'es',      'name' => 'Pla de Bages',                           'data_lang' => ['es']],
            ['id' => 51,        'lang_id' => 'es',      'name' => 'Tarragona',                              'data_lang' => ['es']],
            ['id' => 52,        'lang_id' => 'es',      'name' => 'Terra Alta',                             'data_lang' => ['es']],
            ['id' => 53,        'lang_id' => 'es',      'name' => 'Alicante',                               'data_lang' => ['es']],
            ['id' => 54,        'lang_id' => 'es',      'name' => 'Utiel-Requena',                          'data_lang' => ['es']],
            ['id' => 55,        'lang_id' => 'es',      'name' => 'Valencia',                               'data_lang' => ['es']],
            ['id' => 56,        'lang_id' => 'es',      'name' => 'Ribera del Guadiana',                    'data_lang' => ['es']],
            ['id' => 57,        'lang_id' => 'es',      'name' => 'Monterrei',                              'data_lang' => ['es']],
            ['id' => 58,        'lang_id' => 'es',      'name' => 'Rías Baixas',                            'data_lang' => ['es']],
            ['id' => 59,        'lang_id' => 'es',      'name' => 'Ribeira Sacra',                          'data_lang' => ['es']],
            ['id' => 60,        'lang_id' => 'es',      'name' => 'Ribeiro',                                'data_lang' => ['es']],
            ['id' => 61,        'lang_id' => 'es',      'name' => 'Valdeorras',                             'data_lang' => ['es']],
            ['id' => 62,        'lang_id' => 'es',      'name' => 'Vinos de Madrid',                        'data_lang' => ['es']],
            ['id' => 63,        'lang_id' => 'es',      'name' => 'Bullas',                                 'data_lang' => ['es']],
            ['id' => 64,        'lang_id' => 'es',      'name' => 'Yecla',                                  'data_lang' => ['es']],
            ['id' => 65,        'lang_id' => 'es',      'name' => 'Navarra',                                'data_lang' => ['es']],
            ['id' => 66,        'lang_id' => 'es',      'name' => 'Chacolí de Álava',                       'data_lang' => ['es']],
            ['id' => 67,        'lang_id' => 'es',      'name' => 'Chacolí de Bizkaia',                     'data_lang' => ['es']],
            ['id' => 68,        'lang_id' => 'es',      'name' => 'Chacolí de Guetaria',                    'data_lang' => ['es']],
            ['id' => 69,        'lang_id' => 'es',      'name' => 'Cava',                                   'data_lang' => ['es']],
            ['id' => 70,        'lang_id' => 'es',      'name' => 'Jumilla ',                               'data_lang' => ['es']],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineAppellationTableSeeder"
 */