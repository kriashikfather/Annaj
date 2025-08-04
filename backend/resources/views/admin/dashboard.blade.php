@extends('admin.layouts.adminpanel')

@section('title', 'Admin Dashboard')

@section('content')
  {{-- <h1 class="mb-4">Dashboard</h1> --}}
  <h1 class="text-white">Welcome to AnnaJ Dashboard</h1>
  <!-- More cards here -->

  <div class="row g-4">
    <div class="col-md-3">
      <div class="card text-white bg-primary">
        <div class="card-body">
          <h5 class="card-title">Users</h5>
          <p class="card-text">Manage users</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-success">
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <p class="card-text">Add and edit products</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-warning">
        <div class="card-body">
          <h5 class="card-title">Orders</h5>
          <p class="card-text">Track orders</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-danger">
        <div class="card-body">
          <h5 class="card-title">Payments</h5>
          <p class="card-text">View transactions</p>
        </div>
      </div>
    </div>
  </div>
@endsection
