<?php

namespace App\Http\Requests\Compagnie;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompagnieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'codcie' => ['required', 'integer'],
			'libcie' => ['required', 'string'],
			'adrcie' => ['required', 'string'],
			'logcie' => ['required'],
			'mandat' => ['required', 'boolean'],
        ];
    }
}
