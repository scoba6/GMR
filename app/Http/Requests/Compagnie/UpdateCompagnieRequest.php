<?php

namespace App\Http\Requests\Compagnie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompagnieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'codcie' => ['sometimes', 'integer'],
			'libcie' => ['sometimes', 'string'],
			'adrcie' => ['sometimes', 'string'],
			'logcie' => ['sometimes'],
			'mandat' => ['sometimes', 'boolean'],
        ];
    }
}
