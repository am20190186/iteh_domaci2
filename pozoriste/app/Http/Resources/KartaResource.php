<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KartaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    public function toArray($request) 
    {
        return [
            'ID -> ' => $this->resource->id,
            'Iznos karte za predstavu -> ' => $this->resource->iznos,
            'Broj sedista -> ' => $this->resource->brojSedista,
            'Nacin placanja -> ' => $this->resource->nacinPlacanja,
            'Posetilac -> ' => new PosetilacResource($this->resource->posetilac_id),
            'Predstava -> ' => new PredstavaResource($this->resource->predstava_id)

        ];
    }
}

