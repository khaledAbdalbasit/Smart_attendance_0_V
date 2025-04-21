@extends('dashboard.master')
@section('title-page')
    Edit Period
@endsection
@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">Edit Period</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Edit Period Form -->
        <form action="{{ route('admin.periods.update', $period->period_number) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="period_number">Period Number</label>
                    <input type="number" name="period_number" class="form-control" id="period_number"
                           value="{{ old('period_number', $period->period_number) }}" required>
                    @error('period_number')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="start_time">Start Time</label>
                    <input type="time" name="start_time" class="form-control" id="start_time"
                           value="{{ old('start_time', $period->start_time) }}" required>
                    @error('start_time')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="end_time">End Time</label>
                    <input type="time" name="end_time" class="form-control" id="end_time"
                           value="{{ old('end_time', $period->end_time) }}" required>
                    @error('end_time')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <button type="submit" class="btn" style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-top: 32px;">Update Period</button>
            </div>
        </form>
    </div>
@endsection
