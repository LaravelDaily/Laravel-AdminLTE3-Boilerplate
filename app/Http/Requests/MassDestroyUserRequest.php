<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyUserRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('user_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:users,id',
        ];
    }
}
