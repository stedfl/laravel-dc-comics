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
            'title' => 'required|min:2|max:100',
            'thumb' => 'nullable|url|max:255',
            'price' => 'required|decimal:2|max:9999.99',
            'series' => 'required|min:2|max:100',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|min:2|max:50',
            'description' => 'max:2000'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required ',
            'title.min' => 'Title requires at least 2 characters',
            'title.max' => 'Title requires maximum 100 characters',
            'thumb.url' => 'Image requires a valid url',
            'thumb.max' => 'Image requires maximum 255 characters',
            'price.required' => 'A price is required ',
            'price.decimal' => 'Price requires a float number with 2 decimals',
            'price.max' => 'Price can not be greater than 9999.99',
            'series.required' => 'A title is required ',
            'series.min' => 'Series requires at least 2 characters',
            'series.max' => 'Series requires maximum 100 characters',
            'sale_date.required' => 'A sale date is required ',
            'sale_date.date_format' => 'Sale date requires date format YYYY-MM-DD ',
            'type.required' => 'A type is required ',
            'type.min' => 'Type requires at least 2 characters',
            'type.max' => 'Type requires maximum 50 characters',
            'description.max' => 'Description requires maximum 2000 characters',
        ];
    }
}
