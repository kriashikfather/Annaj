@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-primary">Edit Order #{{ $order->id }}</h2>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Select User</label>
            <select name="user_id" class="form-select" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Total Amount (₹)</label>
            <input type="number" name="total_amount" class="form-control" value="{{ $order->total_amount }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Payment Method</label>
            <select name="payment_method" class="form-select" required>
                <option value="cash_on_delivery" {{ $order->payment_method == 'cash_on_delivery' ? 'selected' : '' }}>Cash on Delivery</option>
                <option value="esewa" {{ $order->payment_method == 'esewa' ? 'selected' : '' }}>Esewa</option>
                <option value="khalti" {{ $order->payment_method == 'khalti' ? 'selected' : '' }}>Khalti</option>
                <option value="fonepay" {{ $order->payment_method == 'fonepay' ? 'selected' : '' }}>Fonepay</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Order Status</label>
            <select name="status" class="form-select" required>
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
