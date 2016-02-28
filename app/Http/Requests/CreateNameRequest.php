<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateNameRequest extends Request
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
        if($this->input('rtype') == 1)

            return [
                'name'    => 'required|min:2',
                'surname' => 'required|min:2',
                'family'  => 'required|min:2',
                'egn_eik' => 'required|unique:names|min:9|max:10',
                'city'    => 'required',
                'pcode'   => 'required|min:4|max:4',
                'address' => 'required|min:2',
                'phone'   => 'required|min:4',
                'email'   => 'required|email',
            ];

        if($this->input('rtype') == 2)

            return [
                'name'    => 'required|min:2',
                'egn_eik' => 'required|unique:names|min:9|max:10',
                'city'    => 'required',
                'pcode'   => 'required|min:4|max:4',
                'address' => 'required|min:2',
                'phone'   => 'required|min:4',
                'email'   => 'required|email',
            ];
    }
}
