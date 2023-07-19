<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PredstavaResource;
use App\Models\Predstava;

class PredstavaController extends Controller
{
    public function index()
    {
        $predstave = Predstava::all();
        return PredstavaResource::collection($predstave);
    }

    public function show(Predstava $predstava)
    {
        return new PredstavaResource($predstava);
    }

    public function update(Request $request,  $predstava)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'zanr' => 'required',
            'brojSale' => 'required',
            'trajanje' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $predstava->naziv = $request->naziv;
        $predstava->zanr = $request->zanr;
        $predstava->brojSale = $request->brojSale;
        $predstava->trajanje = $request->trajanje;

        $predstava->save();

        return response()->json(['Uspešno izmenjena predstava!', new PredstavaResource($predstava)]);
    }

    public function destroy( $predstava)
    {
        $predstava->delete();
        return response()->json('Uspešno obrisana predstava!');
    }
}
