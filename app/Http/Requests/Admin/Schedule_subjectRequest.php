<?php

namespace App\Http\Requests\Admin;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Schedule_subjectRequest extends FormRequest
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
            'level' => 'required|integer|min:0|max:5',
            'day' => 'required|string',
            'period_id' => [
                'required',
                'integer',
                Rule::exists('schedules')->where(function ($query) {
                    $query->where('day', $this->input('day'));
                })
            ],
            'location_name' => 'required|exists:locations,location_name',
            'course_id' => 'required|exists:courses,course_id',
            'instructor_id' => [
                'required',
                'exists:instructors,id',
                function ($attribute, $value, $fail) {
                    $course = Course::find($this->input('course_id'));
                    if ($course && $course->instructor_id != $value) {
                        $fail('The selected instructor does not teach this course.');
                    }
                }
            ]


        ];
    }

//    public function withValidator($validator)
//    {
//        $validator->after(function ($validator) {
//            $day = $this->input('day');
//            $period_id = $this->input('period_id');
//
//            $exists = \App\Models\Schedule::where('day', $day)
//                ->where('period_id', $period_id)
//                ->exists();
////                $this->dd($exists);
//            if (!$exists) {
//                $validator->errors()->add('period_id', 'The selected day and period combination does not exist in the schedule.');
//            }
//        });
//    }

}
