<?php

namespace App\Http\Resources\Student;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'course_id' =>$this->course_id,
            'course_name' => $this->courses->course_name,
            'instructor_id' =>$this->courses->instructor->name,
        ];
    }
}
