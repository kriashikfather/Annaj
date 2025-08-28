@extends('admin.layouts.adminpanel')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold text-primary">Products Management</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Product
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price (₹)</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td class="fw-bold">{{ $product->name }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td class="text-success fw-bold">₹{{ number_format($product->price, 2) }}</td>
                            <td>
                                @if($product->stock > 0)
                                    <span class="badge bg-success">{{ $product->stock }} in stock</span>
                                @else
                                    <span class="badge bg-danger">Out of stock</span>
                                @endif
                            </td>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}"
                                         alt="{{ $product->name }}"
                                         width="60"
                                         class="rounded shadow-sm">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $product->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this product?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-muted">No products available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
