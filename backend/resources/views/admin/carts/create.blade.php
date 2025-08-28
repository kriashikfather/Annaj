@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add New Cart</h2>

    <form action="{{ route('carts.store') }}" method="POST" class="shadow p-4 bg-white rounded">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Select User</label>
            <select name="user_id" id="user_id" class="form-select" required>
                <option value="">-- Select User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} (ID: {{ $user->id }})</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fa fa-plus"></i> Create Cart
        </button>
        <a href="{{ route('carts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
