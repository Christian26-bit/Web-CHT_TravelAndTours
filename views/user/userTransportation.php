<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $baseUrl; ?>" >
    <script>const BASE_URL = "<?php echo $baseUrl; ?>";</script>
  <meta charset="UTF-8">
  <title>CHT Travel & Tour Management - Transportation</title>
  <link rel="stylesheet" href="assets/css/user_style.css">
  <link rel="stylesheet" href="assets/css/user-booking.css">
</head>
<body class="user-body">
  <!-- SIDEBAR -->
  <aside class="user-sidebar">
    <div class="sidebar-logo">
      <div class="logo-circle">CHT</div>
      <div class="logo-text">
        <span>CHT Travel & Tours</span>
        <small>User Panel</small>
      </div>
    </div>

    <nav class="sidebar-menu">
      <button class="btn-new-booking" onclick="window.location.href = BASE_URL + 'bookings/1'">+ New Booking</button>


      <a href="user/dashboard" class="sidebar-item">
        <span class="sidebar-icon">🏠</span> Dashboard
      </a>
      <a href="user/bookings" class="sidebar-item">
        <span class="sidebar-icon">📅</span> Bookings
      </a>
      <a href="user/clients" class="sidebar-item">
        <span class="sidebar-icon">👤</span> Clients
      </a>
      <a href="user/tour_packages" class="sidebar-item">
        <span class="sidebar-icon">🧳</span> Tour Packages
      </a>
      <a href="user/trips" class="sidebar-item">
        <span class="sidebar-icon">📍</span> Trips
      </a>
      <a href="user/hotel" class="sidebar-item">
        <span class="sidebar-icon">🏨</span> Hotel
      </a>
      <a href="user/transportation" class="sidebar-item active">
        <span class="sidebar-icon">🚐</span> Transportation
      </a>
      <a href="user/payments" class="sidebar-item">
        <span class="sidebar-icon">💳</span> Payments
      </a>
    </nav>

    <div class="sidebar-footer">
      <button id="userLogoutBtn" class="logout-link">⟵ Logout</button>
    </div>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="user-content">
  <header class="content-header">
    <div>
      <h1 class="content-title">Transportation</h1>
      <p class="content-subtitle">Manage vehicle fleet and transportation options</p>
    </div>
    <div>
      <span id="transportCountLabel">0 vehicles</span>
    </div>
  </header>

  <section class="transport-search-row">
    <div class="transport-search-wrap">
      <span class="search-icon">🔍</span>
      <input
        type="text"
        id="transportSearch"
        placeholder="Search by vehicle type or provider..."
      >
    </div>
  </section>

  <section class="table-wrapper big">
    <table id="transportTable">
      <thead>
      <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Capacity</th>
        <th>Plate Number</th>
        <th>Provider</th>
      </tr>
      </thead>
      <tbody>
      <!-- rows from JS -->
      </tbody>
    </table>
  </section>
</main>

<script src="assets/js/user/userTransportaion.js"></script>
</body>
</html>

 













































