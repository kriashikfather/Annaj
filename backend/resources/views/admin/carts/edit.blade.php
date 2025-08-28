@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Cart</h2>

    <form action="{{ route('carts.update', $cart->id) }}" method="POST" class="shadow p-4 bg-white rounded">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">Select User</label>
            <select name="user_id" id="user_id" class="form-select" required>
                <option value="">-- Select User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $cart->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }} (ID: {{ $user->id }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i> Update Cart
        </button>
        <a href="{{ route('carts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
