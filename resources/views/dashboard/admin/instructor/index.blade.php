@extends('dashboard.master')
@section('title-page')
    Professors
@endsection
@section('instructor-active','active')
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0" style="color: #FFFFFF;">Instructors List</h4>
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
                <a href="{{ route('admin.instructors.create') }}" class="btn mb-3"
                   style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                    + New Instructor
                </a>

                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($instructors as $instructor)
                        <tr>
                            <td>{{ $instructor->id }}</td>
                            <td>{{ $instructor->name }}</td>
                            <td>
                                <a href="{{ route('admin.profile.instructors', $instructor->id) }}"
                                   style="color: #0d6efd;">
                                    {{ $instructor->email }}
                                </a>
                            </td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('admin.instructors.edit', $instructor->id) }}" class="btn btn-sm"
                                   style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                                    Edit
                                </a>

                                <!-- Delete Form -->
                                <form action="{{ route('admin.instructors.delete', $instructor->id) }}" method="POST"
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this doctor?')">
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
