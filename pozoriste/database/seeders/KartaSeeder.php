<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karta;
use App\Models\Posetilac;
use App\Models\Predstava;

class KartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $posetilac1 = Posetilac::factory()->create();
        $posetilac2 = Posetilac::factory()->create();
        $posetilac3 = Posetilac::factory()->create();

        $predstava1 = Predstava::factory()->create();
        $predstava2 = Predstava::factory()->create();

        Karta::factory(3)->create([
            'posetilac_id'=>$posetilac1->id,
            'predstava_id'=>$predstava1->id
           ]);

        Karta::factory(2)->create([
            'posetilac_id'=>$posetilac2->id,
            'predstava_id'=>$predstava2->id
           ]);

        Karta::factory(2)->create([
            'posetilac_id'=>$posetilac3->id,
            'predstava_id'=>$predstava2->id
           ]);
    }
}
