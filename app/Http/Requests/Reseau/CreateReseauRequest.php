<?php

namespace App\Http\Requests\Reseau;

use Illuminate\Foundation\Http\FormRequest;

class CreateReseauRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'compagnie_id' => ['required'],
			'agence_id' => ['required'],
			'codcrt' => ['required', 'integer'],
        ];
    }
}
