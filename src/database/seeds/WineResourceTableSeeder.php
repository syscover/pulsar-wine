<?php

use Illuminate\Database\Seeder;
use Syscover\Admin\Models\Resource;

class WineResourceTableSeeder extends Seeder {

    public function run()
    {
        Resource::insert([
            ['id' => 'wine',                        'name' => 'Wine Package',                           'package_id' => 400],
            ['id' => 'wine-wine',                   'name' => 'Wines',                                  'package_id' => 400]
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineResourceTableSeeder"
 */