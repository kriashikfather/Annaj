{{-- resources/views/admin/payments/edit.blade.php --}}
@extends('admin.layouts.adminpanel')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Payment</h1>

    <form action="{{ route('payments.update', $payment->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="order_id" class="form-label">Order ID</label>
            <input type="number" name="order_id" id="order_id" class="form-control" value="{{ $payment->order_id }}" required>
        </div>

        <div class="mb-3">
            <label for="method" class="form-label">Payment Method</label>
            <select name="method" id="method" class="form-select" required>
                <option value="cash_on_delivery" {{ $payment->method == 'cash_on_delivery' ? 'selected' : '' }}>Cash on Delivery</option>
                <option value="esewa" {{ $payment->method == 'esewa' ? 'selected' : '' }}>eSewa</option>
                <option value="khalti" {{ $payment->method == 'khalti' ? 'selected' : '' }}>Khalti</option>
                <option value="fonepay" {{ $payment->method == 'fonepay' ? 'selected' : '' }}>Fonepay</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" value="{{ $payment->amount }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $payment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="failed" {{ $payment->status == 'failed' ? 'selected' : '' }}>Failed</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="transaction_id" class="form-label">Transaction ID (Optional)</label>
            <input type="text" name="transaction_id" id="transaction_id" class="form-control" value="{{ $payment->transaction_id }}">
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Update Payment
        </button>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
