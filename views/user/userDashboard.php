<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $baseUrl; ?>" >
    <script>const BASE_URL = "<?php echo $baseUrl; ?>";</script>
  <meta charset="UTF-8">
  <title>CHT Travel & Tour Management System - User Dashboard</title>
  <!-- user-specific css -->
  <link rel="stylesheet" href="assets/css/user_style.css">
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

    <nav class="sidebar-menu"> <button class="btn-new-booking" onclick="window.location.href = BASE_URL + 'bookings/1'">+ New Booking</button>
  

      <a href="user/dashboard" class="sidebar-item active">
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
      <a href="user/transportation" class="sidebar-item">
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
    <!-- TOP WELCOME BANNER -->
    <section class="welcome-banner">
      <div class="welcome-text">
        <h1>Welcome back, <span id="userNameLabel">admin</span></h1>
        <p>Here’s a quick overview of your travel agency performance.</p>
      </div>
      <button class="btn-banner-booking">+ New Booking</button>
    </section>

    <!-- METRIC CARDS -->
    <section class="metrics-row">
      <article class="metric-card">
        <div class="metric-icon customers">👥</div>
        <div class="metric-main">
          <p class="metric-title">Total Customers</p>
          <p class="metric-value" id="totalCustomers">5</p>
          <p class="metric-sub">Active Travelers</p>
        </div>
        <div class="metric-change positive">+5%</div>
      </article>

      <article class="metric-card">
        <div class="metric-icon ongoing">✈</div>
        <div class="metric-main">
          <p class="metric-title">Ongoing Trips</p>
          <p class="metric-value" id="ongoingTrips">1</p>
          <p class="metric-sub">In progress</p>
        </div>
        <div class="metric-change positive">+12%</div>
      </article>

      <article class="metric-card">
        <div class="metric-icon upcoming">📅</div>
        <div class="metric-main">
          <p class="metric-title">Upcoming Trips</p>
          <p class="metric-value" id="upcomingTrips">0</p>
          <p class="metric-sub">Scheduled</p>
        </div>
        <div class="metric-change positive">+8%</div>
      </article>

      <article class="metric-card">
        <div class="metric-icon completed">✔</div>
        <div class="metric-main">
          <p class="metric-title">Completed Trips</p>
          <p class="metric-value" id="completedTrips">2</p>
          <p class="metric-sub">Finished</p>
        </div>
        <div class="metric-change positive">+15%</div>
      </article>
    </section>

    <!-- RECENT BOOKINGS TABLE -->
    <section class="card recent-bookings-card">
      <header class="card-header">
        <div>
          <h2>Recent Bookings</h2>
          <p>Latest activities from your agency</p>
        </div>
        <button class="link-view-all">➜ View All</button>
      </header>

      <div class="table-wrapper">
        <table id="userBookingsTable">
          <thead>
          <tr>
            <th>Booking ID</th>
            <th>Client</th>
            <th>Destination</th>
            <th>Package</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <!-- rows filled by JS -->
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script src="assets/js/admin/user_app.js"></script>
</body>
</html>













































