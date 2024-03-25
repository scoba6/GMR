<?php

namespace App\Http\Resources\Apporteur;

use Illuminate\Http\Resources\Json\JsonResource;

class ApporteurResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'codapp' => $this->codapp,
			'libapp' => $this->libapp,
			'adrapp' => $this->adrapp,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
