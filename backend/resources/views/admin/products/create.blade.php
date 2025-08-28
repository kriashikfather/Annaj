@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Add New Product</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (₹)</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Enter product price" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter available stock" required>
        </div>

        <button type="submit" class="btn btn-success">Add Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
