@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Bookings Management</h2>

    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add New Booking
    </a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Service</th>
                <th>Date</th>
                <th>Status</th>
                <th width="180px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->user->name ?? 'N/A' }}</td>
                <td>{{ $booking->service->name ?? 'N/A' }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>
                    <span class="badge bg-{{ $booking->status == 'confirmed' ? 'success' : ($booking->status == 'pending' ? 'warning' : 'danger') }}">
                        {{ ucfirst($booking->status) }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this booking?')" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
