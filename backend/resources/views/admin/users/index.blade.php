@extends('admin.layouts.adminpanel')

@section('title', 'Users')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="fw-bold">User List</h2>
  <a href="{{ route('users.create') }}" class="btn btn-success">
    <i class="fas fa-plus-circle me-1"></i> Add New User
  </a>
</div>

<div class="card shadow-sm">
  <div class="card-body table-responsive">
    <table class="table table-hover text-dark">
      <thead class="table-success">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ ucfirst($user->role) }}</td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">
              <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center text-muted">No users found.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
