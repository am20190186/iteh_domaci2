<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PredstavaResource extends JsonResource
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
            'Naziv predstave -> ' => $this->resource->naziv,
            'Zanr predstave -> ' => $this->resource->zanr,
            'Broj sale -> ' => $this->resource->brojSale,
            'Trajanje u minutima -> '=> $this->resource->trajanje,
        ];
    }
}
