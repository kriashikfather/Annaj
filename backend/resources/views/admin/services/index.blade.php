@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Services Management</h2>
        <a href="{{ route('services.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Service
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Description</th>
                        <th>Price (₹)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td>{{ number_format($service->price, 2) }}</td>
                            <td>
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure to delete this service?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No services found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
