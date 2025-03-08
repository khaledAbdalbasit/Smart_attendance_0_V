<?php

namespace App\Http\Resources\Student;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'student_id' => $this->student_id,
            'course_id' => $this->course_id,
            'day' => $this->day,
            'period_id' => $this->period_id,
            'location_name'=>$this->location_name,
            'week_id'=>$this->week_id

        ];
    }
}
