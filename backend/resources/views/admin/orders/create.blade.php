@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-success">Add New Order</h2>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Select User</label>
            <select name="user_id" class="form-select" required>
                <option value="">-- Select User --</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Total Amount (₹)</label>
            <input type="number" name="total_amount" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Payment Method</label>
            <select name="payment_method" class="form-select" required>
                <option value="cash_on_delivery">Cash on Delivery</option>
                <option value="esewa">Esewa</option>
                <option value="khalti">Khalti</option>
                <option value="fonepay">Fonepay</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Order Status</label>
            <select name="status" class="form-select" required>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save Order</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
