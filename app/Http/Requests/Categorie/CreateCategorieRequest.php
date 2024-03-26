<?php

namespace App\Http\Requests\Categorie;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategorieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libcat' => ['required', 'string'],
			'nuordr' => ['required', 'integer'],
			'branche_id' => ['required'],
        ];
    }
}
