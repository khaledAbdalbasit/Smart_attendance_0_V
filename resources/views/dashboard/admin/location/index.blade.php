@extends('dashboard.master')
@section('location-active','active')
@section('title-page')
    Locations
@endsection
@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">Locations List</h4>

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
            }, 7000); // Hide messages after 5 seconds
        </script>

        <!-- New Button -->
        <a href="{{ route('admin.locations.create') }}" class="btn"
           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: white; margin-bottom: 20px;">New
            Location</a>

        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($locations as $location)
{{--                @dd($locations)--}}
                <tr>

                @if(isset($location->location_name))
                        <td>{{ $location->location_name }}</td>
                    @else
                        <td>No Name Available</td>
                    @endif
                    <td>{{ $location->capacity }}</td>
                    <td>
                        <!-- Edit Button with gradient -->
                        <a href="{{route('admin.locations.edit',$location->location_name)}}" class="btn btn-sm"
                           style="background: linear-gradient(310deg, #005399 0%, #005399 100%); color: #e88a8a;">Edit</a>

                        <!-- Delete Form -->
                        <form action="{{route('admin.locations.delete',$location->location_name)}}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this location?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
