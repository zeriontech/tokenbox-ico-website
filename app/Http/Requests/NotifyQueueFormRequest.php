<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotifyQueueFormRequest extends FormRequest
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
            'EMAIL'  => 'required|email',
            'NAME'   => 'required|min:1',
            'PHONE'  => 'min:0',
            'AMOUNT' => 'required|min:1',
        ];
    }
}