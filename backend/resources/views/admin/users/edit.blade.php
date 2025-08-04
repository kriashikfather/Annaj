@extends('admin.layouts.adminpanel')

@section('title', 'Edit User')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="fw-bold">Edit User</h2>
  <a href="{{ route('users.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left me-1"></i> Back
  </a>
</div>

<div class="card shadow-sm">
  <div class="card-body">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
      </div>
      <div class="mb-3">
        <label for="role" class="form-label fw-semibold">Role</label>
        <select class="form-control" id="role" name="role" required>
          <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
          <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">
        <i class="fas fa-save me-1"></i> Update
      </button>
    </form>
  </div>
</div>
@endsection

