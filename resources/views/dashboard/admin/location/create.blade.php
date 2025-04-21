@extends('dashboard.master')
@section('location-active','active')
@section('title-page')
    Locations
@endsection
@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background: linear-gradient(310deg, #005399 0%, #005399 100%);">
                <h3 class="text-white">Create New Location</h3>
            </div>

            <div class="card-body">
                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Create Location Form -->
                <form method="POST" action="{{ route('admin.locations.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="location_name" class="form-label">Location Name</label>
                        <input type="text" class="form-control" id="location_name" name="location_name"
                               value="{{ old('location_name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacity</label>
                        <input type="number" class="form-control" id="capacity" name="capacity"
                               value="{{ old('capacity') }}" required>
                    </div>

                    <button type="submit" class="btn text-white"
                            style="background: linear-gradient(310deg, #005399 0%, #005399 100%); border: none;">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
