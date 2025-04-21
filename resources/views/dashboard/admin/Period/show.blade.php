@extends('dashboard.master')
@section('title-page')
    Period Details
@endsection
@section('period-active','active')
@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">Period Details</h4>

        @if(session('success'))
            <div class="alert alert-success" id="success-message">
                {{ session('success') }}
            </div>
        @endif

        <script>
            setTimeout(function () {
                let successMessage = document.getElementById('success-message');
                if (successMessage) successMessage.style.display = 'none';
            }, 7000);
        </script>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Period #{{ $period->period_number }}</h5>
                <p class="card-text"><strong>Start Time:</strong> {{ $period->start_time }}</p>
                <p class="card-text"><strong>End Time:</strong> {{ $period->end_time }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('admin.periods.edit', $period->period_number) }}" class="btn btn-sm"
               style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white;">
                Edit
            </a>

            <form action="{{ route('admin.periods.delete', $period->period_number) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you sure you want to delete this period?')">Delete
                </button>
            </form>
        </div>
    </div>

@endsection
