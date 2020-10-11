<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProduct extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => [
                'required',
                    Rule::in(Category::pluck('id')),
            ],
            'name'        => [
                'required',
                'max:64',
            ],
            'description' => [
                'required',
            ],
            'price'       => [
                'required',
                'min:0',
                'numeric',
            ],
            'amount'      => [
                'required',
                'min:1',
                'numeric',
            ],
        ];
    }

    // public function attributes() {

    //     return [
    //         'category_id' => 'Kategoria',
    //         'name'        => 'Nazwa',
    //         'description' => 'Opis',
    //         'price'       => 'Cena',
    //     ];
    // }

}
