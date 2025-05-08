@extends('dashboard.master')
@section('subject-active','active')
@section('title-page')
    Subjects
@endsection
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0" style="color: #FFFFFF;">Subjects List</h4>
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

                <script>
                    setTimeout(function () {
                        let successMessage = document.getElementById('success-message');
                        let deleteMessage = document.getElementById('delete-message');
                        let failedDeleteMessage = document.getElementById('failed-delete-message');

                        if (successMessage) successMessage.style.display = 'none';
                        if (deleteMessage) deleteMessage.style.display = 'none';
                        if (failedDeleteMessage) failedDeleteMessage.style.display = 'none';
                    }, 7000);
                </script>

                <!-- New Button -->
                <a href="{{ route('admin.subjects.create') }}" class="btn mb-3"
                   style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                    + New Course
                </a>

                <table class="table table-bordered text-center" style="background-color: white;">
                    <thead class="thead-dark" style="background-color: #f8f9fa;">
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
                            <td>
                                <a href="{{ route('admin.profile.subjects', $subject->course_id) }}"
                                   style="color: #0d6efd;">
                                    {{ $subject->course_name }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.profile.instructors', $subject->instructor->id) }}"
                                   style="color: #0d6efd;">
                                    {{ $subject->instructor->name }}
                                </a>
                            </td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('admin.subjects.edit', $subject->course_id) }}" class="btn btn-sm"
                                   style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                                    Edit
                                </a>

                                <!-- Delete Form -->
                                <form action="{{ route('admin.subjects.delete', $subject->course_id) }}" method="POST"
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this course?')">
                                        Delete
                                    </button>
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
