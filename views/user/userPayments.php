<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $baseUrl; ?>" >
    <script>const BASE_URL = "<?php echo $baseUrl; ?>";</script>
  <meta charset="UTF-8">
  <title>CHT Travel & Tour Management - Payments</title>
  <link rel="stylesheet" href="assets/css/user_style.css">
  <link rel="stylesheet" href="assets/css/bookings.css">
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
      <a href="user/transportation" class="sidebar-item">
        <span class="sidebar-icon">🚐</span> Transportation
      </a>
      <a href="user/payments" class="sidebar-item active">
        <span class="sidebar-icon">💳</span> Payments
      </a>
    </nav>

    <div class="sidebar-footer">
      <button id="userLogoutBtn" class="logout-link">⟵ Logout</button>
    </div>
  </aside>

 <main class="user-content">
    <header class="content-header">
      <div>
        <h1 class="content-title">💳 Payments</h1>
        <p class="content-subtitle">Track payment records and transactions</p>
      </div>
      <div class="header-count">
        <span id="paymentsCountLabel">0 payments</span>
      </div>
    </header>

    <!-- SUMMARY CARDS -->
    <section class="payments-summary-row">
      <article class="payments-summary-card received">
        <div class="summary-icon">✓</div>
        <div class="summary-content">
          <h3>Total Received</h3>
          <p id="totalReceivedValue" class="summary-value">₱0.00</p>
        </div>
      </article>
      <article class="payments-summary-card pending">
        <div class="summary-icon">⏳</div>
        <div class="summary-content">
          <h3>Pending Payments</h3>
          <p id="totalPendingValue" class="summary-value">₱0.00</p>
        </div>
      </article>
      <article class="payments-summary-card transactions">
        <div class="summary-icon">📊</div>
        <div class="summary-content">
          <h3>Total Transactions</h3>
          <p id="totalTransactionsValue" class="summary-value">0</p>
        </div>
      </article>
    </section>

    <!-- SEARCH BAR -->
    <section class="payments-search-row">
      <div class="payments-search-wrap">
        <span class="search-icon">🔍</span>
        <input
          type="text"
          id="paymentsSearch"
          placeholder="Search by reference, method or booking ID..."
        >
      </div>
    </section>

    <!-- PAYMENTS TABLE -->
    <section class="payments-table-card">
      <div class="table-wrapper">
        <table id="paymentsTable">
          <thead>
            <tr>
              <th>Payment ID</th>
              <th>Booking</th>
              <th>Amount</th>
              <th>Date</th>
              <th>Method</th>
              <th>Status</th>
              <th>Reference</th>
            </tr>
          </thead>
          <tbody>
            <!-- rows from JS -->
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script src="assets/js/user/userPayments.js"></script>
</body>
</html>













































