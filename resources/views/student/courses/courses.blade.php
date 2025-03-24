@extends('student.master')

@section('content')
    <div class="site-section courses-title" id="courses-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">Courses</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section courses-entry-wrap bg-light py-5" data-aos="fade-up" data-aos-delay="100">
        <div class="container bg-secondary p-4 rounded">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-4 mb-4">
                        <div class="course bg-white h-100 align-self-stretch shadow-sm rounded">
                            <figure class="m-0">
                                <a href="{{route('student.attendance',$course->course_id)}}">
                                    <img src="{{asset('student_them')}}/images/img_2.jpg" alt="Image"
                                         class="img-fluid rounded-top">
                                </a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <p>Code: {{$course->course_id}}.</p>
                                <h3><a href="{{route('student.attendance',$course->course_id)}}">Name: {{$course->courses->course_name}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
