@extends('dashboard.master')
@section('subject-active','active')
@section('title-page')
    Subjects
@endsection
@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">Subjects List</h4>

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

        <script>
            setTimeout(function () {
                let successMessage = document.getElementById('success-message');
                let deleteMessage = document.getElementById('delete-message');

                if (successMessage) successMessage.style.display = 'none';
                if (deleteMessage) deleteMessage.style.display = 'none';

                let failedDeleteMessage = document.getElementById('failed-delete-message');
                if (failedDeleteMessage) failedDeleteMessage.style.display = 'none';
            }, 7000); // Hide messages after 5 seconds
        </script>

        <!-- New Button -->
        <a href="{{route('admin.subjects.create')}}" class="btn"
           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-bottom: 20px;">New
            Course</a>

        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Instructor</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->course_id }}</td>
                    <td><a href="{{route('admin.profile.subjects',$subject->course_id)}}"
                           style="color: #0d6efd ">{{ $subject->course_name }}</a>
                    </td>
                    <td><a href="{{route('admin.profile.instructors',$subject->instructor->id)}}" style="color: #0d6efd;">
                            {{ $subject->instructor->name}}</a></td>
                    <td>
                        <!-- Edit Button with gradient -->
                        <a href="{{route('admin.subjects.edit',$subject->course_id)}}" class="btn btn-sm"
                           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">Edit</a>

                        <!-- Delete Form -->
                        <form action="{{route('admin.subjects.delete',$subject->course_id)}}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this doctor?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
