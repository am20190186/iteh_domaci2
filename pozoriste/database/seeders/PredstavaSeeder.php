<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Predstava;

class PredstavaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $predstava1 = Predstava::factory()->create();
        $predstava2 = Predstava::factory()->create();
    }
}
