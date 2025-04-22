@extends('dashboard.master')

@section('content')
    <style>.custom-checkbox-gradient {
            background: linear-gradient(310deg, #005399 0%, #005399 100%);
            border: none;
            box-shadow: 0 0 5px rgba(0, 83, 153, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .custom-checkbox-gradient:checked {
            background: linear-gradient(310deg, #004080 0%, #004080 100%);
            border: none;
            box-shadow: 0 0 8px rgba(0, 64, 128, 0.7);
        }
    </style>
    <div class="card text-white mb-3" style="background: linear-gradient(310deg, #005399 0%, #005399 100%)">
        <div class="card-body text-center position-relative">
            <a href="{{route('instructor.subject.takeAttendance', $course->course_id)}}"
               class="btn btn-light fw-bold position-absolute start-0 top-50 translate-middle-y ms-3">Take
                Attendance</a>
            <h5 class="card-title mt-2">Attendance for</h5>
            <p class="card-text fw-bold fs-5">
    {{--                Day: <span class="text-warning">{{ $day ?? $schedule_subject->day }}</span> |--}}
    {{--                Period: <span class="text-light">{{ $period ?? $schedule_subject->period_id }}</span>--}}
            </p>
        </div>
    </div>

    <form method="POST" action="{{ route('updateAttendance') }}">
        @csrf
        <input type="hidden" name="course_id" value="{{ $id }}">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Student Id</th>
                <th>Student Name</th>
                @for ($i = 1; $i <= 13; $i++)
                    <th>Week {{ $i }}</th>
                @endfor
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->student->id }}</td>
                    <td>{{ $student->student->name }}</td>

                    @for ($i = 1; $i <= 13; $i++)
                        @php
                            $filteredAttendance = $student->attendances->where('week_id', $i)->first();
                        @endphp
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input custom-checkbox-gradient" type="checkbox"
                                       name="attendance[{{ $student->student->id }}][{{ $i }}]"
                                       value="1" {{ $filteredAttendance ? 'checked' : '' }}>
                            </div>

                        </td>
                    @endfor
                </tr>
            @endforeach

            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Update Attendance</button>
    </form>
@endsection
