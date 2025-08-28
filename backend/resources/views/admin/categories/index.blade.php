@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold text-primary">Categories Management</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Category
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td class="fw-bold">{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-muted">No categories found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
