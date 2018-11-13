<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WineTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(WinePackageTableSeeder::class);
        $this->call(WineResourceTableSeeder::class);
        $this->call(WineAppellationTableSeeder::class);
        $this->call(WineWineryTableSeeder::class);
        $this->call(WineTypeTableSeeder::class);
        $this->call(WinePresentationTableSeeder::class);

        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineTableSeeder"
 */