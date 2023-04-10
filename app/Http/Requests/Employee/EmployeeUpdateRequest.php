<?php

namespace App\Http\Requests\Employee;

use App\Enums\EmployeeGenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|max:64',
            'last_name'=> 'required|max:64',
            'birth_date'=> 'required|date_format:d/m/Y',
            'gender' => ['required', Rule::in(EmployeeGenderEnum::getAllValue())],
            'hire_date' => 'required|date_format:d/m/Y',
        ];
    }
}
