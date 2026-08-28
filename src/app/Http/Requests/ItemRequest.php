<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'unit' => 'nullable|string|max:50',
            'price' => 'nullable|numeric|min:0',
            'purchased' => 'nullable|boolean',
        ];
    }
}
