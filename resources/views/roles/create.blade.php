<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Role</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
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

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
