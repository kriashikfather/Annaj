<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'AnnaJ')</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      /* Background image with overlay */
      background:
        linear-gradient(rgba(255,255,255,0.85), rgba(255,255,255,0.85)),
        url('{{ asset('images/annaj-bg.png') }}') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      margin: 0;
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      width: 250px;
      background-color: #1b2838; /* Darker blueish shade */
      color: white;
      box-shadow: 3px 0 10px rgba(0,0,0,0.2);
    }
    .sidebar h3 {
      font-weight: 700;
      padding-top: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid rgba(255,255,255,0.15);
      margin-bottom: 0;
      text-align: center;
      letter-spacing: 2px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 15px 20px;
      transition: background-color 0.3s ease;
      font-weight: 600;
      font-size: 1rem;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #4a90e2; /* Soft blue highlight */
      color: #fff;
      text-decoration: none;
    }
    .content {
      margin-left: 250px;
      padding: 40px 30px;
      min-height: 100vh;
    }
    .card {
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
      border-radius: 10px;
    }
  </style>

  <style>
  body::before {
    content: "";
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(6, 100, 75, 0.4); /* black overlay */
    z-index: -1;
  }
</style>

  <style>
  body {
    background-image: url('{{ asset('images/annaj-bg.png') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
  }
</style>

  @stack('styles')
</head>
<body>
  <div class="sidebar">
    <h3>AnnaJ</h3>
    <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">
      <i class="fas fa-users me-2"></i> Users
    </a>
    <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'active' : '' }}">
      <i class="fas fa-box-open me-2"></i> Products
    </a>
    <a href="{{ route('categories.index') }}" class="{{ request()->routeIs('categories.*') ? 'active' : '' }}">
      <i class="fas fa-tags me-2"></i> Categories
    </a>
    <a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.*') ? 'active' : '' }}">
      <i class="fas fa-shopping-cart me-2"></i> Orders
    </a>
    <a href="{{ route('payments.index') }}" class="{{ request()->routeIs('payments.*') ? 'active' : '' }}">
      <i class="fas fa-money-bill-wave me-2"></i> Payments
    </a>
    <a href="{{ route('bookings.index') }}" class="{{ request()->routeIs('bookings.*') ? 'active' : '' }}">
      <i class="fas fa-calendar-alt me-2"></i> Bookings
    </a>
    <a href="{{ route('addresses.index') }}" class="{{ request()->routeIs('addresses.*') ? 'active' : '' }}">
      <i class="fas fa-map-marker-alt me-2"></i> Addresses
    </a>
    <a href="{{ route('carts.index') }}" class="{{ request()->routeIs('carts.*') ? 'active' : '' }}">
      <i class="fas fa-shopping-basket me-2"></i> Carts
    </a>
    <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
      <i class="fas fa-concierge-bell me-2"></i> Services
    </a>
  </div>

  <div class="content">
    @yield('content')
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
