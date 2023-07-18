<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posetilac;

class PosetilacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posetilac1 = Posetilac::factory()->create();
        $posetilac2 = Posetilac::factory()->create();
        $posetilac3 = Posetilac::factory()->create();
    }
}
