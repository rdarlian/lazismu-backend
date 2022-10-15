<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CreateFrontofficeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:4',
            'penyetor' => 'required|string|min:4',
            'penerima' => 'required|string|min:4',
            'nobuktipenerima' => 'required|string|max:255|unique:frontoffices',
            'tanggal' => 'required',
            'ref' => 'nullable',
            'tempatbayar' => 'required|string|max:255',
            'coadebit_id' => 'required|integer|exists:coadebits,id',
            'coakredit_id' => 'required|integer|exists:coakredits,id',
            'jumlah' => 'required|integer',
            'cabang_id' => 'required|integer|exists:cabangs,id',
            
        ];
    }
}
