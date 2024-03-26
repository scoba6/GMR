<?php

namespace App\Http\Requests\Branche;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrancheRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libbrc' => ['sometimes', 'string'],
        ];
    }
}
