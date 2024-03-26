<?php

namespace App\Http\Resources\Reseau;

use Illuminate\Http\Resources\Json\JsonResource;

class ReseauResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'compagnie_id' => $this->compagnie_id,
			'agence_id' => $this->agence_id,
			'codcrt' => $this->codcrt,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
