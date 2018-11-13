<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Appellation;

class WineAppellationTableSeeder extends Seeder {

    public function run()
    {
        Appellation::insert([
            ['id' => 1,                             'name' => 'Rioja',                                  'data_lang' => ['es']],
            ['id' => 2,                             'name' => 'Ribera del Duero',                       'data_lang' => ['es']],
            ['id' => 3,                             'name' => 'Priorat',                                'data_lang' => ['es']],
            ['id' => 4,                             'name' => 'Condado de Huelva',                      'data_lang' => ['es']],
            ['id' => 5,                             'name' => 'Jerez-Xérès-Sherry',                     'data_lang' => ['es']],
            ['id' => 6,                             'name' => 'Málaga',                                 'data_lang' => ['es']],
            ['id' => 7,                             'name' => 'Manzanilla Sanlúcar de Barrameda',       'data_lang' => ['es']],
            ['id' => 8,                             'name' => 'Montilla-Moriles',                       'data_lang' => ['es']],
            ['id' => 9,                             'name' => 'Sierras de Málaga',                      'data_lang' => ['es']],
            ['id' => 10,                            'name' => 'Calatayud',                              'data_lang' => ['es']],
            ['id' => 11,                            'name' => 'Campo de Borja',                         'data_lang' => ['es']],
            ['id' => 12,                            'name' => 'Cariñena',                               'data_lang' => ['es']],
            ['id' => 13,                            'name' => 'Somontano',                              'data_lang' => ['es']],
            ['id' => 14,                            'name' => 'Binissalem',                             'data_lang' => ['es']],
            ['id' => 15,                            'name' => 'Pla i Llevant',                          'data_lang' => ['es']],
            ['id' => 16,                            'name' => 'Abona',                                  'data_lang' => ['es']],
            ['id' => 17,                            'name' => 'El Hierro',                              'data_lang' => ['es']],
            ['id' => 18,                            'name' => 'Gran Canaria',                           'data_lang' => ['es']],
            ['id' => 19,                            'name' => 'Islas Canarias',                         'data_lang' => ['es']],
            ['id' => 20,                            'name' => 'La Gomera',                              'data_lang' => ['es']],
            ['id' => 21,                            'name' => 'La Palma',                               'data_lang' => ['es']],
            ['id' => 22,                            'name' => 'Lanzarote',                              'data_lang' => ['es']],
            ['id' => 23,                            'name' => 'Tacoronte-Acentejo',                     'data_lang' => ['es']],
            ['id' => 24,                            'name' => 'Valle Güimar',                           'data_lang' => ['es']],
            ['id' => 25,                            'name' => 'Valle de la Orotava',                    'data_lang' => ['es']],
            ['id' => 26,                            'name' => 'Ycoden-Daute-Isora',                     'data_lang' => ['es']],
            ['id' => 27,                            'name' => 'Arlanza',                                'data_lang' => ['es']],
            ['id' => 28,                            'name' => 'Arribes',                                'data_lang' => ['es']],
            ['id' => 29,                            'name' => 'Bierzo',                                 'data_lang' => ['es']],
            ['id' => 30,                            'name' => 'Cigales',                                'data_lang' => ['es']],
            ['id' => 31,                            'name' => 'Rueda',                                  'data_lang' => ['es']],
            ['id' => 32,                            'name' => 'Tierra de León',                         'data_lang' => ['es']],
            ['id' => 33,                            'name' => 'Tierra del Vino de Zamora',              'data_lang' => ['es']],
            ['id' => 34,                            'name' => 'Toro',                                   'data_lang' => ['es']],
            ['id' => 35,                            'name' => 'Almansa',                                'data_lang' => ['es']],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineAppellationTableSeeder"
 */