@extends('dashboard.master')
@section('content')
    <style>.btn-custom {
            background-color: #005399;
            border-color: #005399;
            color: white;
        }

        .btn-custom:hover {
            background-color: #003f73;
            border-color: #003f73;
        }
    </style>
    <div class="card shadow-lg rounded-3 p-4" style="max-width: 500px; margin-left: 25px;">
        <h2 class="text-center mb-3 fw-bold text-dark">Add Instructor</h2>
        <form action="/register-instructor" method="POST">
            <div class="mb-3">
                <label class="form-label fw-medium">Name</label>
                <input type="text" name="name" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-medium">Email</label>
                <input type="email" name="email" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-medium">Password</label>
                <input type="password" name="password" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-medium">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control rounded-pill" required>
            </div>

            <button type="submit" class="btn btn-custom w-100 rounded-pill">
                Register Instructor
            </button>

        </form>
    </div>

@endsection
