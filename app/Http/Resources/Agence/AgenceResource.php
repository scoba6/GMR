<?php

namespace App\Http\Resources\Agence;

use Illuminate\Http\Resources\Json\JsonResource;

class AgenceResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'codage' => $this->codage,
			'libage' => $this->libage,
			'adrage' => $this->adrage,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
