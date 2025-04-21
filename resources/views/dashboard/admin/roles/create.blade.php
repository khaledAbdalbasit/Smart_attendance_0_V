@extends('dashboard.master')

@section('content')

    <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Create New Role</h2>
        <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">
            <i class="fa fa-arrow-left"></i> Back
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label"><strong>Name:</strong></label>
            <input type="text" name="name" placeholder="Name" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Permission:</strong></label>
            <div class="border p-3 rounded">
                @foreach($permission as $value)
                    <div class="form-check">
                        <input type="checkbox" name="permission[{{$value->id}}]" value="{{$value->id}}" class="form-check-input">
                        <label class="form-check-label">{{ $value->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm mb-3">
                <i class="fa-solid fa-floppy-disk"></i> Submit
            </button>
        </div>
    </form>
</div>

@endsection
