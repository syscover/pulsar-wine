<?php

use Illuminate\Database\Seeder;
use Syscover\Admin\Models\Resource;

class WineResourceTableSeeder extends Seeder {

    public function run()
    {
        Resource::insert([
            ['id' => 'wine',                        'name' => 'Wine Package',                           'package_id' => 400],
            ['id' => 'wine-wine',                   'name' => 'Wines',                                  'package_id' => 400],
            ['id' => 'wine-winery',                 'name' => 'Wineries',                               'package_id' => 400],
            ['id' => 'wine-appellation',            'name' => 'Appellations',                           'package_id' => 400],
            ['id' => 'wine-family',                 'name' => 'Families',                               'package_id' => 400],
            ['id' => 'wine-type',                   'name' => 'Types',                                  'package_id' => 400],
            ['id' => 'wine-grape',                  'name' => 'Grapes',                                 'package_id' => 400],
            ['id' => 'wine-pairing',                'name' => 'Pairings',                               'package_id' => 400],
            ['id' => 'wine-awards',                 'name' => 'Awards',                                 'package_id' => 400],
            ['id' => 'wine-presentation',           'name' => 'Presentations',                          'package_id' => 400]
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineResourceTableSeeder"
 */