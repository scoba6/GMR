<?php

namespace App\Http\Resources\Client;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'titclt' => $this->titclt,
			'rsnclt' => $this->rsnclt,
			'telclt' => $this->telclt,
			'maiclt' => $this->maiclt,
			'adrclt' => $this->adrclt,
			'cptaux' => $this->cptaux,
			'agence_id' => $this->agence_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
