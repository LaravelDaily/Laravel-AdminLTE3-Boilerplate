<?php

namespace App\Http\Requests;

use App\Role;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyRoleRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('role_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:roles,id',
        ];
    }
}
