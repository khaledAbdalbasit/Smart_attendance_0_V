@extends('dashboard.master')
@section('title-page')
    Professors
@endsection
@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">New Instructor</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add New Instructor Form -->
        <form action="{{ route('admin.instructors.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="name">Doctor Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter doctor's name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control" required>
                        <option value="super-admin" {{ old('role') == 'super-admin' ? 'selected' : '' }}>Super Admin</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="instructor" {{ old('role') == 'instructor' ? 'selected' : '' }}>Instructor</option>
                    </select>
                    @error('role')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" value="{{ old('password') }}" required>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4 mb-3">
                    <button type="submit" class="btn" style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-top: 32px;">Add New Instructor</button>
                </div>
            </div>
        </form>
@endsection
