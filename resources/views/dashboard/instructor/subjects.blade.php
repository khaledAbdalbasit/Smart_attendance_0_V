@extends('dashboard.master')
@section('student-active','active')
@section('title-page')
    Students
@endsection
@section('content')
    <style>.btn {
            background-color: #005399;
            border-color: #005399;
            color: white;
        }

        .btn:hover {
            background-color: #003f73;
            border-color: #003f73;
        }
    </style>
    <div class="container" style="background-color: #f8f9fa; padding-top: 20px;">
        <div class="row g-4"> <!-- استخدم g-4 لإضافة مسافة بين الصفوف -->
            @foreach($subjects as $subject)
                <div class="col-md-4">
                    <div class="card" style="width: 20rem; height: 25rem; display: flex; flex-direction: column;">
                        <div class="image-container" style="width: 100%; height: 200px; overflow: hidden;">
                            <img src="{{asset('adminthem')}}/img/img_2.png" class="card-img-top" alt="Course Image"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between" style="min-height: 150px;">
                            <h5 class="card-title">{{$subject->course_name}}</h5>
                            <p class="card-text">Course Code: {{$subject->course_id}}</p>
                            <a href="{{ route('instructor.subject.attendance', $subject->course_id) }}"
                               class="btn btn-primary">
                                Attendance
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- نهاية الـ row -->
    </div>
@endsection
