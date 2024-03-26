<?php

namespace App\Http\Requests\Reseau;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReseauRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'compagnie_id' => ['sometimes'],
			'agence_id' => ['sometimes'],
			'codcrt' => ['sometimes', 'integer'],
        ];
    }
}
