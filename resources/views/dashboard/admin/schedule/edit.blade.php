@extends('dashboard.master')

@section('title-page')
    Edit Schedule
@endsection

@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">Edit Schedule</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Edit Schedule Form -->
        <form action="{{ route('admin.schedules.update', [$schedule->day,$schedule->period_id] )}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="day">Day</label>
                    <select name="day" id="day" class="form-control" required>
                        <option value="">Select Day</option>
                        @foreach(['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'] as $day)
                            <option
                                value="{{ $day }}" {{ (old('day', $schedule->day) == $day) ? 'selected' : '' }}>{{ $day }}</option>
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
                            <option value="{{ $period->period_number }}"
                                {{ (old('period_id', $schedule->period_id) == $period->period_number) ? 'selected' : '' }}>
                                Period {{ $period->period_number }}
                                ({{ \Carbon\Carbon::parse($period->start_time)->format('H:i') }}
                                - {{ \Carbon\Carbon::parse($period->end_time)->format('H:i') }})
                            </option>
                        @endforeach
                    </select>
                    @error('period_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn"
                            style="background: linear-gradient(310deg, #005399 0%, #005399 100%);
                                   color: white; margin-top: 32px;">
                        Update Schedule
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
