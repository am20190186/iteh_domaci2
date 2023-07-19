<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PosetilacResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'ID -> ' => $this->resource->id,
            'Ime prezime gledaoca -> ' => $this->resource->imePrezime,
            'Broj godina gledaoca -> ' => $this->resource->godine,
            'Broj telefona gledaoca-> ' => $this->resource->kontakt
        ];

    }
}
