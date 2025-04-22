@extends('dashboard.master')

@section('title-page')
    Add Schedule Subject
@endsection

@section('schedule-subjects-active','active')
@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">New Schedule Subject</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('subject-exists'))
            <div class="alert alert-warning">
                {{ session('subject-exists') }}
            </div>
        @endif

        <form action="{{ route('admin.schedules.subjects.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="level">Level</label>
                    <input type="text" name="level" id="level" class="form-control" value="{{ old('level') }}" required>
                    @error('level')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <input type="hidden" name="day" id="day_input">

                <!-- Select Day & Period -->
                <div class="col-md-4 mb-3">
                    <label for="day_period">Day & Period</label>
                    <select name="period_id" id="period_id" class="form-control" required onchange="updateDay(this)">
                        <option value="">Select Day & Period</option>
                        @foreach($scheduleData as $item)
                            <option value="{{ $item->period_id }}"
                                    data-day="{{ $item->day }}"
                                {{ old('period_id') == $item->period_id ? 'selected' : '' }}>
                                {{ $item->day }} - Period {{ $item->period_id }}
                                ({{ $item->period->start_time ?? 'N/A' }} - {{ $item->period->end_time ?? 'N/A' }})
                            </option>
                        @endforeach
                    </select>
                    @error('period_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="location_name">Location</label>
                    <select name="location_name" id="location_name" class="form-control" required>
                        @foreach($locations as $location)
                            <option
                                value="{{ $location->location_name }}" {{ old('location_name') == $location->location_name ? 'selected' : '' }}>
                                {{ $location->location_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('location_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="course_id">Course</label>
                    <select name="course_id" id="course_id" class="form-control" required>
                        @foreach($courses as $course)
                            <option
                                value="{{ $course->course_id }}" {{ old('course_id') == $course->course_id ? 'selected' : '' }}>
                                {{ $course->course_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('course_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="instructor_id">Instructor</label>
                    <select name="instructor_id" id="instructor_id" class="form-control" required>
                        @foreach($courses as $course)
                            <option
                                value="{{ $course->instructor->id }}" {{ old('instructor_id') == $course->instructor->id? 'selected' : '' }}>
                                {{ $course->instructor->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('instructor_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn"
                    style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                Add Schedule Subject
            </button>
        </form>
    </div>
    <script>
        function updateDay(select) {
            const selectedOption = select.options[select.selectedIndex];
            const day = selectedOption.getAttribute('data-day');
            document.getElementById('day_input').value = day;
        }

        document.addEventListener('DOMContentLoaded', () => {
            const select = document.getElementById('period_id');
            if (select.value) updateDay(select); // auto-set on load if value exists
        });

        setTimeout(() => {
            document.getElementById('exists-message')?.remove();
        }, 3000);
    </script>
@endsection
