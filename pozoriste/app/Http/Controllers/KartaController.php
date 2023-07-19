<?php

namespace App\Http\Controllers;

use App\Http\Resources\KartaResource;
use Illuminate\Http\Request;
use App\Models\Karta;

class KartaController extends Controller
{
    public function index()
    {
        $karte = Karta::all();
        return KartaResource::collection($karte);
    }

    public function show( Karta $karta)
    {
        return new KartaResource($karta);
    }

    public function destroy(Karta $karta)
    {
        $karta->delete();
        return response()->json('Uspešno obrisana karta za predstavu!');
    }
}
