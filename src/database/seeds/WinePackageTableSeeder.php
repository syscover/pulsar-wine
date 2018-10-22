<?php

use Illuminate\Database\Seeder;
use Syscover\Admin\Models\Package;

class WinePackageTableSeeder extends Seeder
{
    public function run()
    {
        Package::insert([
            ['id' => 400, 'name' => 'Wine Package', 'root' => 'wine', 'sort' => 400, 'active' => true]
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WinePackageTableSeeder"
 */