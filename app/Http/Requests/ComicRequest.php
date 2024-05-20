<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:3',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|numeric',
            'series' => 'required|max:100|min:3',
            'sale_date' => 'required|date',
            'type' => 'required|max:50|min:3',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.max' => 'Il campo titolo deve avere al massimo 100 caratteri',
            'title.min' => 'Il campo titolo deve avere al minimo 3 caratteri',
            'description.required' => 'Il campo descrizione è obbligatorio',
            'thumb.required' => 'Il campo immagine è obbligatorio',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.numeric' => 'Il campo prezzo deve essere un numero',
            'series.required' => 'Il campo serie è obbligatorio',
            'series.max' => 'Il campo serie deve avere al massimo 100 caratteri',
            'series.min' => 'Il campo serie deve avere al minimo 3 caratteri',
            'sale_date.required' => 'Il campo data di vendita è obbligatorio',
            'sale_date.date' => 'Il campo data di vendita deve essere una data',
            'type.required' => 'Il campo tipo è obbligatorio',
            'type.max' => 'Il campo tipo deve avere al massimo 50 caratteri',
            'type.min' => 'Il campo tipo deve avere al minimo 3 caratteri',
            'artists.required' => 'Il campo artisti è obbligatorio',
            'writers.required' => 'Il campo scrittori è obbligatorio',
        ];
    }
}
