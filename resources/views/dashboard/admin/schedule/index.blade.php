@extends('dashboard.master')
@section('title-page')
    Periods
@endsection
@section('schedules-active', 'active')
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h4 class="mb-0">Periods List</h4>
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

                <!-- Add New Schedule Button -->
                <a href="{{ route('admin.schedules.create') }}" class="btn"
                   style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-bottom: 20px;">
                    New Schedule
                </a>

                <!-- Displaying Schedules by Day -->
                @foreach (['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'] as $day)
                    <div class="mt-4">
                        <h5>{{ $day }}</h5>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th>Period Number</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($schedules->where('day', $day) as $schedule)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.periods.show', $schedule->period->period_number) }}"
                                           style="color: #0d6efd;">
                                            {{ $schedule->period->period_number ?? 'N/A' }}
                                        </a>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->period->start_time)->format('H:i') ?? 'N/A' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->period->end_time)->format('H:i') ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('admin.schedules.edit', [$schedule->day, $schedule->period_id]) }}"
                                           class="btn btn-sm"
                                           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">Edit</a>

                                        <form action="{{ route('admin.schedules.delete', [$schedule->day, $schedule->period_id]) }}"
                                              method="POST"
                                              style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this period?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
