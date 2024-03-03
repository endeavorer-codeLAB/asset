<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetInventoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'assetid' => 'required|max:255',
            'assetDescription' => 'required|max:255',
            'assetClass' => 'required|max:255',
            'assetCategory' => 'required|max:255',
            'assetQty' => 'required|max:255',
            'assetUnit' => 'required|max:255',
            'assetStatus' => 'required|max:255',
            'assetRemarks' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'assetDescription.max' => 'Nothing',
        ];
    }
}
