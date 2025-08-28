@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="name"
                   value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                  </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (₹)</label>
            <input type="number" name="price" class="form-control" id="price"
                   value="{{ $product->price }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock"
                   value="{{ $product->stock }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
