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

    public function show( Posetilac $posetilac)
    {
        return new PosetilacResource($posetilac);
    }


}