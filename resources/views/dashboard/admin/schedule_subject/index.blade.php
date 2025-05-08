@extends('dashboard.master')
@section('schedule-subjects-active','active')
@section('title-page')
    Schedule Subjects
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0" style="color: #FFFFFF;">Schedule Subjects</h4>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success" id="success-message">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('success-delete'))
                    <div class="alert alert-danger" id="delete-message">
                        {{ session('success-delete') }}
                    </div>
                @endif

                @if(session('failed-delete'))
                    <div class="alert alert-warning" id="failed-delete-message">
                        {{ session('failed-delete') }}
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
                        <th>Actions</th>
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
                            <td class="d-flex gap-2">
                                <a href="{{ route('admin.schedules.subjects.edit', [
                                    'day' => $item->day,
                                    'period_id' => $item->period_id,
                                    'location_name' => $item->location_name,
                                    'course_id' => $item->course_id,
                                    'instructor_id' => $item->instructor_id,
                                ]) }}" class="btn btn-sm btn-primary">Edit</a>

                                <form action="{{ route('admin.schedules.subjects.delete', [
                                    'day' => $item->day,
                                    'period_id' => $item->period_id,
                                    'location_name' => $item->location_name,
                                    'course_id' => $item->course_id,
                                    'instructor_id' => $item->instructor_id,
                                ]) }}" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this schedule subject?');"
                                      style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Auto-hide alerts after 3 seconds
        setTimeout(() => {
            document.getElementById('success-message')?.remove();
            document.getElementById('delete-message')?.remove();
            document.getElementById('failed-delete-message')?.remove();
        }, 3000);
    </script>
@endsection
