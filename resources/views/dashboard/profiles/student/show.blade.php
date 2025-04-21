@extends('dashboard.master')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h3 class="text-white">Student Profile</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Student Details -->
                    <div class="col-md-6">
                        <h5>Student ID: <strong>{{ $student_profile->id }}</strong></h5>
                        <p><strong>Name:</strong> {{ $student_profile->name }}</p>
                        <p><strong>Email:</strong> {{ $student_profile->email }}</p>
                        <p><strong>Department:</strong> Computer</p>
                        <p><strong>Level:</strong> {{ $student_profile->level }}</p>
                    </div>

                    <!-- Registered Subjects -->
                    <div class="col-md-6">
                        <h5>Registered Subjects:</h5>
                        @if($registered_courses->count() > 0)
                            <ul>
                                @foreach($registered_courses as $subject)
                                    <li>
                                        <strong><a
                                                href="{{route('admin.profile.subjects',$subject->courses->course_id)}}"
                                                style="color: #0d6efd ">{{ $subject->courses->course_name }}</a>
                                        </strong> ({{ $subject->course_id }})
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No subjects registered.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
