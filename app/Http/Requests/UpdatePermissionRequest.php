<?php

namespace App\Http\Requests;

use App\Permission;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePermissionRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('permission_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
        ];
    }
}
