<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|min:2|max:100',
            'price'=>'required|decimal:2',
            'series'=>'required|min:2|max:100',
            'sale_date'=>'required|date_format:Y-m-d',
            'type'=>'required|min:2|max:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required ',
            'title.min' => 'Title requires at least 2 characters',
            'title.max' => 'Title requires maximum 100 characters',
            'price.required' => 'A price is required ',
            'price.decimal' => 'Price requires a float number with 2 decimals',
            'series.required' => 'A title is required ',
            'series.min' => 'Series requires at least 2 characters',
            'series.max' => 'Series requires maximum 100 characters',
            'sale_date.required' => 'A sale date is required ',
            'sale_date.date' => 'Sale date requires date format YYY-MM-DD ',
            'type.required' => 'A type is required ',
            'type.min' => 'Type requires at least 2 characters',
            'type.max' => 'Type requires maximum 50 characters',
        ];
    }
}
