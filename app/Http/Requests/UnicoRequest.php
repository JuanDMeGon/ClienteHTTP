<?php

namespace ClienteHTTP\Http\Requests;

use ClienteHTTP\Http\Requests\Request;

class UnicoRequest extends Request
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
        return
        [
            'id' => 'required|numeric'
        ];
    }
}
