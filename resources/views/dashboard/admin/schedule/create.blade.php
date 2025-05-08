@extends('dashboard.master')

@section('title-page')
    Add Schedule
@endsection

@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0">New Schedule</h4>
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

                <!-- Add New Schedule Form -->
                <form action="{{ route('admin.schedules.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="day">Day</label>
                            <select name="day" id="day" class="form-control" required>
                                <option value="">Select Day</option>
                                @foreach(['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'] as $day)
                                    <option value="{{ $day }}" {{ old('day') == $day ? 'selected' : '' }}>{{ $day }}</option>
                                @endforeach
                            </select>
                            @error('day')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="period_id">Period</label>
                            <select name="period_id" id="period_id" class="form-control" required>
                                <option value="">Select Period</option>
                                @foreach($periods as $period)
                                    <option value="{{ $period->period_number }}" {{ old('period_id') == $period->period_number ? 'selected' : '' }}>
                                        Period {{ $period->period_number }} ({{ \Carbon\Carbon::parse($period->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($period->end_time)->format('H:i') }})
                                    </option>
                                @endforeach
                            </select>
                            @error('period_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <button type="submit" class="btn"
                                    style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-top: 32px;">
                                Add New Schedule
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
