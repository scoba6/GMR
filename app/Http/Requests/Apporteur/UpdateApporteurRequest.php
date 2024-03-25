<?php

namespace App\Http\Requests\Apporteur;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApporteurRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'codapp' => ['sometimes', 'integer'],
			'libapp' => ['sometimes', 'string'],
			'adrapp' => ['sometimes', 'string'],
        ];
    }
}
