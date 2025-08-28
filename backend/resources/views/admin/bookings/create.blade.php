@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add New Booking</h2>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Select User</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="service_id" class="form-label">Select Service</label>
            <select name="service_id" class="form-control" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="booking_date" class="form-label">Booking Date</label>
            <input type="date" name="booking_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Booking Status</label>
            <select name="status" class="form-control" required>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save Booking
        </button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
