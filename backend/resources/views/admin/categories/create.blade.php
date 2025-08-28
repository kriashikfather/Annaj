@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-success mb-4">Add New Category</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Category Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label fw-bold">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter slug (optional)">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Save
                </button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
