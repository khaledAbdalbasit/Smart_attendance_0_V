<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PeriodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'period_number' =>  $this->isMethod('POST')?'required|numeric|unique:periods,period_number':'nullable|unique:periods,period_number',
            'start_time' =>  $this->isMethod('POST')?'required|date_format:H:i':'nullable',
            'end_time'=> $this->isMethod('POST')?'required|date_format:H:i|after:start_time':'nullable',
        ];
    }
}
