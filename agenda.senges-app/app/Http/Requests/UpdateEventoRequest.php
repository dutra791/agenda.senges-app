<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventoRequest extends FormRequest
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
             //
             'data' => 'required|date',
             'descricao' =>'required|string',
             'inicio'=> 'required|date_format:H:i', 
             'final'=> 'required|date_format:H:i',
             'contato'=> 'required|string|max:255',
             'realizado'=> 'nullable',
        ];
    }
}