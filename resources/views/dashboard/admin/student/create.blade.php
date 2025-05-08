@extends('dashboard.master')
@section('title-page')
    Students
@endsection
@section('student-active','active')
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0" style="color: #FFFFFF;">New Student</h4>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success" id="success-message">
                        {{ session('success') }}
                    </div>
                @endif

                <script>
                    setTimeout(function () {
                        let successMessage = document.getElementById('success-message');
                        if (successMessage) successMessage.style.display = 'none';
                    }, 7000); // Hide success message after 7 seconds
                </script>

                <!-- Add New Student Form -->
                <form action="{{ route('admin.students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- First Row -->
                        <div class="col-md-4 mb-3">
                            <label for="id">ID</label>
                            <input type="number" name="id" class="form-control" id="id" placeholder="Enter student ID"
                                   value="{{ old('id') }}" required>
                            @error('id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Enter student name"
                                   value="{{ old('name') }}" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                                   value="{{ old('email') }}" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Second Row -->
                        <div class="col-md-4 mb-3">
                            <label for="level">Level</label>
                            <input type="number" name="level" class="form-control" id="level" placeholder="Enter level"
                                   value="{{ old('level') }}" required>
                            @error('level')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Enter password" required>
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="face_data">Face Image</label>
                            <input type="file" name="face_data" class="form-control" id="face_data" accept="image/*"
                                   required>
                            @error('face_data')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <button type="submit" class="btn"
                                style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-top: 32px;">
                            Add New Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
