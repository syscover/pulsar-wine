<?php

use Illuminate\Database\Seeder;
use Syscover\Wine\Models\Family;

class WineFamilyTableSeeder extends Seeder {

    public function run()
    {
        Family::insert([
            ['id' => 1,     'lang_id' => 'es',      'name' => 'Ecológico',      'slug' => 'ecologico',      'data_lang' => '["es"]'],
            ['id' => 2,     'lang_id' => 'es',      'name' => 'Natural',        'slug' => 'natural',        'data_lang' => '["es"]'],
            ['id' => 3,     'lang_id' => 'es',      'name' => 'Vegano',         'slug' => 'vegano',         'data_lang' => '["es"]'],
            ['id' => 4,     'lang_id' => 'es',      'name' => 'Orgánico',       'slug' => 'organico',       'data_lang' => '["es"]'],
            ['id' => 5,     'lang_id' => 'es',      'name' => 'Kosher',         'slug' => 'kosher',         'data_lang' => '["es"]'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineFamilyTableSeeder"
 */