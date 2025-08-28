@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Carts Management</h2>
    <a href="{{ route('carts.create') }}" class="btn btn-success mb-3">
        <i class="fa fa-plus"></i> Add New Cart
    </a>

    <table class="table table-bordered table-striped text-center align-middle shadow">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Total Items</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($carts as $cart)
                <tr>
                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->user->name ?? 'N/A' }}</td>
                    <td>{{ $cart->cartItems->count() }}</td>
                    <td>{{ $cart->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('carts.edit', $cart->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('carts.destroy', $cart->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-muted">No carts found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
