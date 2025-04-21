@extends('dashboard.master')

@section('content')
    <style>
        .card-header {
            background: linear-gradient(310deg, #005399 0%, #005399 100%);
        }
    </style>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-dark">
                <h3>Instructor Profile</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Instructor details -->
                    <div class="col-md-6">
                        <p><strong>Code:</strong> {{$profile->id}}</p>
                        <h5>Name: <strong>{{$profile->name}}</strong></h5>
                        <p><strong>Email:</strong> {{$profile->email}}</p>
                        <p><strong>Department:</strong> Computer</p>
                        <p><strong>Role:</strong> {{$profile->role}}</p>
                        <p><strong>Join Date:</strong> {{$profile->created_at}}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Courses Taught:</h5>
                        <ul>
                            @foreach($profile->courses as $course)
                                <li><a href="{{route('admin.profile.subjects',$course->course_id)}}" style="color: #0d6efd;">{{ $course->course_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
