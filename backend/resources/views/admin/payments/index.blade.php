{{-- resources/views/admin/payments/index.blade.php --}}
@extends('admin.layouts.adminpanel')

@section('content')
<div class="container">
    <h1 class="mb-4">Payments Management</h1>
    <a href="{{ route('payments.create') }}" class="btn btn-success mb-3">
        <i class="fas fa-plus"></i> Add Payment
    </a>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Method</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Transaction ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->order_id }}</td>
                    <td>
                        <span class="badge bg-primary">{{ ucfirst(str_replace('_',' ',$payment->method)) }}</span>
                    </td>
                    <td class="text-success fw-bold">₹ {{ $payment->amount }}</td>
                    <td>
                        @if($payment->status == 'pending')
                            <span class="badge bg-warning">Pending</span>
                        @elseif($payment->status == 'completed')
                            <span class="badge bg-success">Completed</span>
                        @else
                            <span class="badge bg-danger">Failed</span>
                        @endif
                    </td>
                    <td>{{ $payment->transaction_id ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-muted">No payments found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
