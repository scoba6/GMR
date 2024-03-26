<?php

namespace App\Http\Requests\Branche;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrancheRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libbrc' => ['required', 'string'],
        ];
    }
}
