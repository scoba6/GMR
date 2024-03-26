<?php

namespace App\Http\Requests\Agence;

use Illuminate\Foundation\Http\FormRequest;

class CreateAgenceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'codage' => ['required', 'integer'],
			'libage' => ['required', 'string'],
			'adrage' => ['nullable', 'string'],
        ];
    }
}
