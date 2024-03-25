<?php

namespace App\Http\Requests\Agence;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgenceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'codage' => ['sometimes', 'integer'],
			'libage' => ['sometimes', 'string'],
			'adrage' => ['sometimes', 'string'],
        ];
    }
}
