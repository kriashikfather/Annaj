{{-- resources/views/admin/payments/create.blade.php --}}
@extends('admin.layouts.adminpanel')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Payment</h1>

    <form action="{{ route('payments.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="order_id" class="form-label">Order ID</label>
            <input type="number" name="order_id" id="order_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="method" class="form-label">Payment Method</label>
            <select name="method" id="method" class="form-select" required>
                <option value="">-- Select Method --</option>
                <option value="cash_on_delivery">Cash on Delivery</option>
                <option value="esewa">eSewa</option>
                <option value="khalti">Khalti</option>
                <option value="fonepay">Fonepay</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="failed">Failed</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="transaction_id" class="form-label">Transaction ID (Optional)</label>
            <input type="text" name="transaction_id" id="transaction_id" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save Payment
        </button>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
