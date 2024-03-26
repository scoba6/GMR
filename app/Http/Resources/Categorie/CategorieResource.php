<?php

namespace App\Http\Resources\Categorie;

use App\Http\Resources\Branche\BrancheResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CategorieResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'libcat' => $this->libcat,
			'nuordr' => $this->nuordr,
			'branche_id' => $this->branche_id,
            'branche' => BrancheResource::make($this->whenLoaded('branches')), 
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
