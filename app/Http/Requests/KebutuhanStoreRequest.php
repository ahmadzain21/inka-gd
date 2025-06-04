<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KebutuhanStoreRequest extends FormRequest
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
            '1_qty_kebutuhan_1' => 'required',
            '2_qty_kebutuhan_90' => 'required',
            '3_qty_kebutuhan_90' => 'required',
            '4_qty_kebutuhan_100' => 'required',
            '5_qty_kebutuhan_100' => 'required',
            '6_qty_kebutuhan_100' => 'required',
            '7_qty_kebutuhan_100' => 'required',
            '8_qty_kebutuhan_90' => 'required',
            '9_qty_kebutuhan_100' => 'required',
            '10_qty_kebutuhan_100' => 'required',
            '11_qty_kebutuhan_100' => 'required',
            '12_qty_kebutuhan_100' => 'required',
            '13_qty_kebutuhan_55' => 'required',
            'kode_material' => 'required'
        ];
    }
}
