<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'username' => 'required|min:6|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'expire_date' => 'date_format:"Y-m-d H:i"',
        ];
    }
}
