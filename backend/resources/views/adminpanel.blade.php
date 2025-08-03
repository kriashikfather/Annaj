<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Annaj- Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      width: 250px;
      background-color: #343a40;
      color: white;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 15px;
      transition: background-color 0.3s;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 250px;
      padding: 30px;
    }
    .card {
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h3 class="text-center py-3">Admin Panel</h3>
    <a href="{{ route('users.index') }}"><i class="fas fa-users me-2"></i> Users</a>
    <a href="{{ route('products.index') }}"><i class="fas fa-box-open me-2"></i> Products</a>
    <a href="{{ route('categories.index') }}"><i class="fas fa-tags me-2"></i> Categories</a>
    <a href="{{ route('orders.index') }}"><i class="fas fa-shopping-cart me-2"></i> Orders</a>
    <a href="{{ route('payments.index') }}"><i class="fas fa-money-bill-wave me-2"></i> Payments</a>
    <a href="{{ route('bookings.index') }}"><i class="fas fa-calendar-alt me-2"></i> Bookings</a>
    <a href="{{ route('addresses.index') }}"><i class="fas fa-map-marker-alt me-2"></i> Addresses</a>
    <a href="{{ route('carts.index') }}"><i class="fas fa-shopping-basket me-2"></i> Carts</a>
    <a href="{{ route('services.index') }}"><i class="fas fa-concierge-bell me-2"></i> Services</a>
  </div>

  <div class="content">
    <h1>Dashboard</h1>
    <div class="row">
      <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title">Users</h5>
            <p class="card-text">Manage users</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">Products</h5>
            <p class="card-text">Add and edit products</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Orders</h5>
            <p class="card-text">Track orders</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-danger mb-3">
          <div class="card-body">
            <h5 class="card-title">Payments</h5>
            <p class="card-text">View transactions</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
