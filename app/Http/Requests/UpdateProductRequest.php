<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'available' => 'required|boolean',
            'image' => 'nullable|image|max:1999', // tamaño máximo de 2MB
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|string|unique:products,slug,',
        ];
    }
}
