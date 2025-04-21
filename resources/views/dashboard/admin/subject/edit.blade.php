@extends('dashboard.master')

@section('subject-active','active')

@section('title-page')
    Subjects
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h3 class="text-white">Edit {{ $subject->course_name }}</h3>
            </div>

            <div class="card-body">
                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Edit Subject Form -->
                <form method="POST" action="{{ route('admin.subjects.update', $subject->course_id) }}">
                    @csrf
                    @method('PUT') <!-- Important for update -->

                    <div class="mb-3">
                        <label for="course_id" class="form-label">Course ID</label>
                        <input type="text" class="form-control" id="course_id" name="course_id"
                               value="{{ old('course_id', $subject->course_id) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="course_name" name="course_name"
                               value="{{ old('course_name', $subject->course_name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="instructor_id" class="form-label">Instructor</label>
                        <select class="form-select" id="instructor_id" name="instructor_id" required>
                            <option value="">Select Instructor</option>
                            @foreach ($instructors as $instructor)
                                <option value="{{ $instructor->id }}"
                                    {{ old('instructor_id', $subject->instructor_id) == $instructor->id ? 'selected' : '' }}>
                                    {{ $instructor->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn text-white"
                            style="background: linear-gradient(310deg, #005399 0%, #005399 100%); border: none;">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
