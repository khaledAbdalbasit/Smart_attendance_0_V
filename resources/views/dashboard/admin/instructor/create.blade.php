@extends('dashboard.master')
@section('title-page')
    New Instructor
@endsection
@section('instructor-active','active')
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0" style="color: #FFFFFF;">New Instructor</h4>
            </div>

            <div class="card-body">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Add New Instructor Form -->
                <form action="{{ route('admin.instructors.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name"
                                   value="{{ old('name') }}" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                                   value="{{ old('email') }}" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="instructor" {{ old('role') == 'instructor' ? 'selected' : '' }}>Instructor</option>
                                @if(auth('instructors')->user()->role == 'super-admin')
                                    <option value="super-admin" {{ old('role') == 'super-admin' ? 'selected' : '' }}>Super Admin</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                @endif
                            </select>
                            @error('role')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Enter password" required>
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="face_data">Face Image</label>
                            <input type="file" name="face_data" class="form-control" id="face_data" accept="image/*" required>
                            @error('face_data')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%); border: none;">
                            Add Instructor
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
