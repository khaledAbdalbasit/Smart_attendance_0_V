@extends('dashboard.master')

@section('student-registration-active', 'active')
@section('title-page')
    Student Registration
@endsection

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4 text-center">Student Registration</h4>

        <!-- حقل البحث لبحث الطالب -->
        <form action="{{ route('search.student') }}" method="GET">
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="text" id="student_id" name="student_id" class="form-control" placeholder="Enter Student ID"
                       value="{{ old('student_id') }}">
            </div>
            <button type="submit" class="btn btn-block mt-3"
                    style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                Search
            </button>
        </form>

        <!-- عرض الأخطاء إذا كانت موجودة -->
        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- عرض بيانات الطالب -->
        @if (isset($student))
            <div class="student-info mt-5 p-4 bg-light rounded shadow-sm">
                <h5 class="text-primary">Student Information:</h5>
                <div><strong>Student ID:</strong> {{ $student->id }}</div>
                <div><strong>Name:</strong> {{ $student->name }}</div>
                <div><strong>Email:</strong> {{ $student->email }}</div>
                <div><strong>Level:</strong> {{ $student->level }}</div>
            </div>

            @php
                $days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'];
                $periods = [1, 2, 3, 4, 5, 6, 7, 8];
            @endphp

            <table class="table table-bordered table-striped mt-4">
                <thead class="thead-dark">
                <tr>
                    <th>Period \ Day</th>
                    @foreach ($days as $day)
                        <th>{{ $day }}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach ($periods as $period)
                    <tr>
                        <td><strong>Period {{ $period }}</strong></td>
                        @foreach ($days as $day)
                            <td>
                                @php
                                    $subjectsInCell = $registeredSubjects->where('day', $day)->where('period_id', $period);
                                @endphp

                                @if ($subjectsInCell->isNotEmpty())
                                    @foreach ($subjectsInCell as $subject)
                                        <div class="mb-1 p-1 bg-light rounded">
                                            <strong>{{ $subject->courses->course_name }}</strong> ({{ $subject->courses->course_id }})<br>
                                            <small>{{ $subject->location_name }}</small>
                                        </div>
                                    @endforeach
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- نموذج البحث عن المادة -->
            <div class="mt-5">
                <h5 class="text-primary">Search for a Course:</h5>
                <form action="{{ route('admin.registrations.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ $student->id }}">

                    <div class="form-group">
                        <label for="course_code">Course Code</label>
                        <input type="text" id="course_code" name="course_code" class="form-control"
                               placeholder="Enter Course Code">
                    </div>
                    <button type="submit" class="btn btn-block mt-2"
                            style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                        Register Course
                    </button>
                </form>
            </div>
        @endif
    </div>
@endsection
