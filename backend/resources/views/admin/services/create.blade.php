@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-5">
    <h2 class="fw-bold mb-4">Add New Service</h2>

    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body">
            <form action="{{ route('services.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter service name" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Service Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Enter service details" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price (₹)</label>
                    <input type="number" name="price" class="form-control" step="0.01" placeholder="Enter service price" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Save Service
                </button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
