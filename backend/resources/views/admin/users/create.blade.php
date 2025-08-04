@extends('admin.layouts.adminpanel') {{-- Or use layouts.master if that's your base layout --}}

@section('title', 'Add New User')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="fw-bold">Add New User</h2>
  <a href="{{ route('users.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left me-1"></i> Back
  </a>
</div>

<div class="card shadow-sm">
  <div class="card-body">
    <form action="{{ route('users.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label fw-semibold">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="role" class="form-label fw-semibold">Role</label>
        <select class="form-control" id="role" name="role" required>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">
        <i class="fas fa-user-plus me-1"></i> Create
      </button>
    </form>
  </div>
</div>
@endsection
