<?php

namespace App\Http\Resources\Compagnie;

use Illuminate\Http\Resources\Json\JsonResource;

class CompagnieResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'codcie' => $this->codcie,
			'libcie' => $this->libcie,
			'adrcie' => $this->adrcie,
			'logcie' => $this->logcie,
			'mandat' => $this->mandat,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
