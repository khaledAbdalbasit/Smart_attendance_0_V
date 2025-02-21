<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Role Management</h2>
        @can('role-create')
            <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}">
                <i class="fa fa-plus"></i> Create New Role
            </a>
        @endcan
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th width="100px">No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">
                        <i class="fa-solid fa-list"></i> Show
                    </a>
                    @can('role-edit')
                        <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                    @endcan
                    @can('role-delete')
                        <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $roles->links('pagination::bootstrap-5') !!}
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
