<?php

namespace App\Http\Requests\Categorie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategorieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libcat' => ['sometimes', 'string'],
			'nuordr' => ['sometimes', 'integer'],
			'branche_id' => ['sometimes'],
        ];
    }
}
