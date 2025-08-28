@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-primary mb-4">Edit Category</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Category Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label fw-bold">Slug</label>
                    <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update
                </button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
