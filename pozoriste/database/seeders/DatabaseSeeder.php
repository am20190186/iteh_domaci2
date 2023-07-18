<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\KartaSeeder;
use Database\Seeders\PosetilacSeeder;
use Database\Seeders\PredstavaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $PredstavaSeeder = new PredstavaSeeder;
        $PredstavaSeeder->run();

        $PosetilacSeeder = new PosetilacSeeder;
        $PosetilacSeeder->run();

        $KartaSeeder = new KartaSeeder;
        $KartaSeeder->run();
    }
}
