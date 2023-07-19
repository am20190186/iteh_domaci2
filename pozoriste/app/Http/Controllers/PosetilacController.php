<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PosetilacResource;
use App\Models\Posetilac;

class PosetilacController extends Controller
{
    public function index()
    {
        $posetioci = Posetilac::all();
        return PosetilacResource::collection($posetioci);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'imePrezime' => 'required',
            'godine' => 'required',
            'kontakt' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $posetilac = Posetilac::create([
            'imePrezime' => $request->imePrezime,
            'godine' => $request->godine,
            'kontakt' => $request->kontakt,
        ]);

        $odgovor = [
            'Posetilac: ' => $posetilac
        ];

        return response()->json($odgovor);
    }

    public function show( Posetilac $posetilac)
    {
        return new PosetilacResource($posetilac);
    }


}