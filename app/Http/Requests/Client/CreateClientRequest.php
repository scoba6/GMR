<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'titclt' => ['required', 'in:M,Mme,St'],
			'rsnclt' => ['required', 'string'],
			'telclt' => ['required', 'string'],
			'maiclt' => ['required', 'string'],
			'adrclt' => ['required', 'string'],
			'cptaux' => ['required', 'string'],
			'agence_id' => ['required'],
        ];
    }
}
