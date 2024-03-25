<?php

namespace App\Http\Requests\Apporteur;

use Illuminate\Foundation\Http\FormRequest;

class CreateApporteurRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'codapp' => ['required', 'integer'],
			'libapp' => ['required', 'string'],
			'adrapp' => ['nullable', 'string'],
        ];
    }
}
