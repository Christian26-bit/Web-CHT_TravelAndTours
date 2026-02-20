<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $baseUrl; ?>" >
    <script>const BASE_URL = "<?php echo $baseUrl; ?>";</script>
  <meta charset="UTF-8">
  <title>CHT Travel & Tour Management - Clients</title>
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

    <nav class="sidebar-menu">
      <nav class="sidebar-menu">
       <button class="btn-new-booking" onclick="window.location.href = BASE_URL + 'bookings/1'">+ New Booking</button>


      <a href="user/dashboard" class="sidebar-item">
        <span class="sidebar-icon">🏠</span> Dashboard
      </a>
      <a href="user/bookings" class="sidebar-item">
        <span class="sidebar-icon">📅</span> Bookings
      </a>

      <a href="user/clients" class="sidebar-item active">
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
    <!-- HEADER -->
    <header class="content-header clients-header">
      <div class="clients-header-left">
        <h1 class="content-title">👤 Clients</h1>
        <p class="content-subtitle">
          Manage your client records and contact information
        </p>
      </div>
    </header>

    <!-- TOOLBAR: Search + Add Button -->
    <section class="clients-toolbar">
      <div class="clients-search-box">
        <svg class="search-icon-svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"></circle>
          <path d="m21 21-4.35-4.35"></path>
        </svg>
        <input
          type="text"
          id="clientsSearch"
          placeholder="Search clients by name, email, or contact..."
        >
      </div>
      <button class="clients-add-btn" id="addClientBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
          <circle cx="9" cy="7" r="4"></circle>
          <line x1="19" y1="8" x2="19" y2="14"></line>
          <line x1="22" y1="11" x2="16" y2="11"></line>
        </svg>
        Add New Client
      </button>
    </section>

    <!-- CLIENTS TABLE -->
    <section class="table-wrapper big bookings-table-wrapper">
      <table id="clientsTable">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Address</th>
          <th>Type</th>
          <th>Registered</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <!-- rows by JS -->
        </tbody>
      </table>
    </section>
  </main>

  <!-- ADD / EDIT CLIENT MODAL -->
  <div id="clientModalOverlay" class="modal-overlay hidden">
    <div class="modal">
      <div class="modal-header">
        <h3 id="clientModalTitle">Add New Client</h3>
        <button class="modal-close-btn" id="closeClientModalBtn">✕</button>
      </div>
      <p class="modal-subtitle">Enter client details</p>

      <form id="clientForm" class="modal-form">
        <input type="hidden" id="clientId">

        <div class="form-group">
          <label for="clientName">Name</label>
          <input type="text" id="clientName" required>
        </div>

        <div class="form-group">
          <label for="clientEmail">Email</label>
          <input type="email" id="clientEmail">
        </div>

        <div class="form-group">
          <label for="clientContact">Contact</label>
          <input type="text" id="clientContact">
        </div>

        <div class="form-group">
          <label for="clientAddress">Address</label>
          <input type="text" id="clientAddress">
        </div>

        <div class="form-group">
          <label for="clientType">Type</label>
          <select id="clientType">
            <option value="REGULAR">REGULAR</option>
            <option value="CORPORATE">CORPORATE</option>
            <option value="VIP">VIP</option>
          </select>
        </div>

        <div class="modal-actions">
          <button type="button" class="btn btn-secondary small" id="cancelClientBtn">Cancel</button>
          <button type="submit" class="btn btn-primary small">Save</button>
        </div>
      </form>
    </div>
  </div>

  <script src="assets/js/user/userClients.js"></script>
</body>
</html>













































