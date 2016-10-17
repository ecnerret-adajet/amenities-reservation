<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AmenityRequest extends Request
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
            'name_occupants' => 'required',
            'owner_list' => 'required',
            'building_list' => 'required',
            'no_unit' => 'required',
            'reservation_list' => 'required'
        ];
    }
}
