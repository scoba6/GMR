<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'titclt' => ['sometimes', 'in:M,Mme,St'],
			'rsnclt' => ['sometimes', 'string'],
			'telclt' => ['sometimes', 'string'],
			'maiclt' => ['sometimes', 'string'],
			'adrclt' => ['sometimes', 'string'],
			'cptaux' => ['sometimes', 'string'],
			'agence_id' => ['sometimes'],
        ];
    }
}
