<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateWifiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100|string',
            'location' => 'required|exists:locations,id',
            'status' => [
                'required',
                Rule::in([1, 0])
            ]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => $this->status == 'true' ? 1 : ($this->status == 'false' ? 0 : 'not correct'),
            'location' => intval($this->location),
        ]);
    }

    public function messages()
    {
        return [
            'status.in' => 'Status not correct, please try again.',
        ];
    }
}
