@extends('dashboard.master')
@section('title-page')
    Edit Instructor
@endsection
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0" style="color: #FFFFFF;">Edit Instructor</h4>
            </div>

            <div class="card-body">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Edit Instructor Form -->
                <form action="{{ route('admin.instructors.update', $instructor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Doctor Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                   value="{{ old('name', $instructor->name) }}" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   value="{{ old('email', $instructor->email) }}" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="instructor" {{ old('role', $instructor->role) == 'instructor' ? 'selected' : '' }}>
                                    Instructor
                                </option>
                                @if(auth('instructors')->user()->role == 'super-admin')
                                    <option value="super-admin" {{ old('role', $instructor->role) == 'super-admin' ? 'selected' : '' }}>
                                        Super Admin
                                    </option>
                                    <option value="admin" {{ old('role', $instructor->role) == 'admin' ? 'selected' : '' }}>
                                        Admin
                                    </option>
                                @endif
                            </select>
                            @error('role')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password">Password (Leave blank if not changing)</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Enter new password (optional)">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn text-white"
                                style="background: linear-gradient(310deg, #005399 0%, #005399 100%); border: none;">
                            Update Instructor
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
