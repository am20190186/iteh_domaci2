<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KartaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ID -> ' => $this->resource->id,
            'Iznos cene karte -> ' => $this->resource->iznos,
            'Broj sedista -> ' => $this->resource->sediste,
            'Nacin placanja -> ' => $this->resource->nacinPlacanja,
            'Posetilac -> ' => new PosetilacResource($this->resource->posetilac),
            'Predstava -> ' => new PredstavaResource($this->resource->predstava)

        ];
    }
}
