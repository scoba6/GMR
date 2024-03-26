<?php

namespace App\Http\Resources\Branche;

use Illuminate\Http\Resources\Json\JsonResource;

class BrancheResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'libbrc' => $this->libbrc,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
