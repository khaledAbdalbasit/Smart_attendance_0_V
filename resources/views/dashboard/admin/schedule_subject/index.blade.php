@extends('dashboard.master')

@section('title-page')
    Schedule Subjects
@endsection

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Schedule Subjects</h4>

        @if(session('success'))
            <div class="alert alert-success" id="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add Button -->
        <a href="{{ route('admin.schedules.subjects.create') }}" class="btn mb-3"
           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
            + Add to Schedule
        </a>

        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Level</th>
                <th>Day</th>
                <th>Period</th>
                <th>Location</th>
                <th>Course</th>
                <th>Instructor</th>
                <th>Action</th> {{-- زرار التعديل --}}
            </tr>
            </thead>
            <tbody>
            @foreach ($schedule_subjects as $item)
                <tr>
                    <td>{{ $item->level }}</td>
                    <td>{{ $item->day }}</td>
                    <td>
                        @if ($item->schedule && $item->schedule->period)
                            Period {{ $item->schedule->period->period_number }}<br>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $item->location->location_name ?? 'N/A' }}</td>
                    <td>{{ $item->course->name ?? $item->course_id ?? 'N/A' }}</td>
                    <td>{{ $item->instructor->name ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('admin.schedules.subjects.edit', [
                    'day' => $item->day,
                    'period_id' => $item->period_id,
                    'location_name' => $item->location_name,
                    'course_id' => $item->course_id,
                    'instructor_id' => $item->instructor_id,
                ]) }}"
                           class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
