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
    public function toArray(Request $request): array
    {
        return [
            'ID -> ' => $this->resource->id,
            'Ime prezime posetioca -> ' => $this->resource->imePrezime,
            'Broj godina posetioca -> ' => $this->resource->godine,
            'Kontakt telefon posetioca-> ' => $this->resource->kontakt
        ];
    }
}
