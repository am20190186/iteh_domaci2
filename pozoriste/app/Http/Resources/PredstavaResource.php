<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PredstavaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    public function toArray( $request)
    {
        return [
            'ID -> ' => $this->resource->id,
            'Naziv predstave -> ' => $this->resource->naziv,
            'Zanr predstave -> ' => $this->resource->zanr,
            'Broj sale -> ' => $this->resource->sala,
            'Trajanje u minutima -> '=> $this->resource->trajanje,
        ];
    }
}
