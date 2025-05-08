@extends('dashboard.master')
@section('title-page')
    New Period
@endsection
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0">New Period</h4>
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

                <!-- Add New Period Form -->
                <form action="{{ route('admin.periods.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="period_number">Period Number</label>
                            <input type="number" name="period_number" class="form-control" id="period_number" placeholder="Enter period number" value="{{ old('period_number') }}" required>
                            @error('period_number')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="start_time">Start Time</label>
                            <input type="time" name="start_time" class="form-control" id="start_time" value="{{ old('start_time') }}" required>
                            @error('start_time')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="end_time">End Time</label>
                            <input type="time" name="end_time" class="form-control" id="end_time" value="{{ old('end_time') }}" required>
                            @error('end_time')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <button type="submit" class="btn" style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-top: 32px;">Add New Period</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
