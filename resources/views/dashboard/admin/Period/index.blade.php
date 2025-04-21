@extends('dashboard.master')
@section('title-page')
    Periods
@endsection
@section('period-active','active')
@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">Periods List</h4>

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

                if (successMessage) successMessage.style.display = 'none';
                if (deleteMessage) deleteMessage.style.display = 'none';

                let failedDeleteMessage = document.getElementById('failed-delete-message');
                if (failedDeleteMessage) failedDeleteMessage.style.display = 'none';
            }, 7000);
        </script>

        <!-- New Period Button -->
        <a href="{{ route('admin.periods.create') }}" class="btn"
           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-bottom: 20px;">
            New Period
        </a>

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
            @foreach ($periods as $period)
                <tr>
                    <td>{{ $period->period_number }}</td>
                    <td>{{ $period->start_time }}</td>
                    <td>{{ $period->end_time }}</td>
                    <td>
                        <a href="{{ route('admin.periods.edit', $period->period_number) }}" class="btn btn-sm"
                           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                            Edit
                        </a>

                        <form action="{{ route('admin.periods.delete', $period->period_number ) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this period?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
