@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-primary">Orders Management</h2>
    <a href="{{ route('orders.create') }}" class="btn btn-success mb-3">
        <i class="fas fa-plus"></i> Add New Order
    </a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name ?? 'N/A' }}</td>
                <td>₹ {{ $order->total_amount }}</td>
                <td>
                    <span class="badge
                        @if($order->status == 'pending') bg-warning
                        @elseif($order->status == 'completed') bg-success
                        @else bg-danger @endif">
                        {{ ucfirst($order->status) }}
                    </span>
                </td>
                <td>{{ ucfirst($order->payment_method) }}</td>
                <td>{{ $order->created_at->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this order?')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
