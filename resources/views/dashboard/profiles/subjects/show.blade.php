@extends('dashboard.master')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h3 class="text-white">Subject Profile</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Subject Details -->
                    <div class="col-md-6">
                        <h5>Course Code: <strong>{{ $course_profile->course_id }}</strong></h5>
                        <p><strong>Course Name:</strong> {{ $course_profile->course_name }}</p>
                        <p><strong>Department:</strong> Computer</p>

                    </div>

                    <!-- Instructor Details -->
                    <div class="col-md-6">
                        <h5>Instructor:</h5>
                        <p><strong>Name:</strong> {{ $course_profile->instructor->name }}</p>
                        <p><strong>Email:</strong> <a href="{{route('admin.profile.instructors',$course_profile->instructor->id)}}" style="color: #0d6efd;">
                                {{$course_profile->instructor->email}}</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
