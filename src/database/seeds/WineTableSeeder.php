<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WineTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(WinePackageSeeder::class);
        $this->call(WineResourceSeeder::class);
        $this->call(WineAppellationSeeder::class);
        $this->call(WineWinerySeeder::class);
        $this->call(WineTypeSeeder::class);
        $this->call(WineFamilySeeder::class);
        $this->call(WinePresentationSeeder::class);
        $this->call(WinePairingSeeder::class);

        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="WineTableSeeder"
 */
