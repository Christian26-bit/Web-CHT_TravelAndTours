<?php
return [
    // Public Views
    'login' => ['file' => 'views/login.php', 'methods' => ['GET']],
    
    // Admin Views
    'admin/dashboard' => ['file' => 'views/admin/dashboard.php', 'methods' => ['GET']],
    'admin/employees' => ['file' => 'views/admin/employees.php', 'methods' => ['GET']],
    'admin/tour_packages' => ['file' => 'views/admin/tour_packages.php', 'methods' => ['GET']],

    // User Views
    'user/dashboard' => ['file' => 'views/user/userDashboard.php', 'methods' => ['GET']],
    'user/bookings' => ['file' => 'views/user/userBookings.php', 'methods' => ['GET']],
    'user/clients' => ['file' => 'views/user/userClients.php', 'methods' => ['GET']],
    'user/hotel' => ['file' => 'views/user/userHotel.php', 'methods' => ['GET']],
    'user/payments' => ['file' => 'views/user/userPayments.php', 'methods' => ['GET']],
    'user/tour_packages' => ['file' => 'views/user/userTourPackage.php', 'methods' => ['GET']],
    'user/transportation' => ['file' => 'views/user/userTransportation.php', 'methods' => ['GET']],
    'user/trips' => ['file' => 'views/user/userTrips.php', 'methods' => ['GET']],

    // Booking Wizard
    'bookings/1' => ['file' => 'views/bookings/bookings1.php', 'methods' => ['GET']],
    'bookings/2' => ['file' => 'views/bookings/bookings2.php', 'methods' => ['GET']],
    'bookings/3' => ['file' => 'views/bookings/bookings3.php', 'methods' => ['GET']],
    'bookings/4' => ['file' => 'views/bookings/bookings4.php', 'methods' => ['GET']],
    'bookings/5' => ['file' => 'views/bookings/bookings5.php', 'methods' => ['GET']],
    'bookings/6' => ['file' => 'views/bookings/bookings6.php', 'methods' => ['GET']],

    // Public API
    'api/login' => ['file' => 'api/login.php', 'methods' => ['POST']],
    'api/check_booking_table' => ['file' => 'api/check_booking_table.php', 'methods' => ['GET']], // Assumption
    
    // Admin API
    'api/admin_dashboard' => ['file' => 'api/adminDashboard.php', 'methods' => ['GET']],
    'api/admin/dashboard_summary' => ['file' => 'api/admin/dashboard_summary.php', 'methods' => ['GET']],
    'api/admin/employees_list' => ['file' => 'api/admin/employees_list.php', 'methods' => ['GET']],
    'api/admin/list_employees' => ['file' => 'api/admin/list_employees.php', 'methods' => ['GET']], // Duplicate? Keeping both for now
    'api/admin/list_packages' => ['file' => 'api/admin/list_packages.php', 'methods' => ['GET']],
    
    'api/admin/save_employee' => ['file' => 'api/admin/save_employee.php', 'methods' => ['POST']],
    'api/admin/employees_save' => ['file' => 'api/admin/employees_save.php', 'methods' => ['POST']], // Duplicate?
    'api/admin/save_package' => ['file' => 'api/admin/save_package.php', 'methods' => ['POST']],
    
    'api/admin/delete_employee' => ['file' => 'api/admin/delete_employee.php', 'methods' => ['POST', 'DELETE']], // Often POST in PHP forms
    'api/admin/delete_package' => ['file' => 'api/admin/delete_package.php', 'methods' => ['POST', 'DELETE']],
    'api/admin/employee_toggle' => ['file' => 'api/admin/employee_toggle.php', 'methods' => ['POST']],

    // User API
    'api/bookings_list' => ['file' => 'api/user/bookings_list.php', 'methods' => ['GET']],
    'api/bookings_save' => ['file' => 'api/user/bookings_save.php', 'methods' => ['POST']],
    'api/bookings_update' => ['file' => 'api/user/bookings_update.php', 'methods' => ['POST']],
    'api/bookings_delete' => ['file' => 'api/user/bookings_delete.php', 'methods' => ['POST']],
    
    'api/clients_list' => ['file' => 'api/user/clients_list.php', 'methods' => ['GET']],
    'api/clients_save' => ['file' => 'api/user/clients_save.php', 'methods' => ['POST']],
    
    'api/hotels_list' => ['file' => 'api/user/hotels_list.php', 'methods' => ['GET']],
    
    'api/packages_list' => ['file' => 'api/user/packages_list.php', 'methods' => ['GET']],
    'api/tour_packages_list' => ['file' => 'api/user/tour_packages_list.php', 'methods' => ['GET']],
    
    'api/payments_list' => ['file' => 'api/user/payments_list.php', 'methods' => ['GET']],
    'api/payments_save' => ['file' => 'api/user/payments_save.php', 'methods' => ['POST']],
    
    'api/transportation_list' => ['file' => 'api/user/transportation_list.php', 'methods' => ['GET']],
    'api/trips_list' => ['file' => 'api/user/trips_list.php', 'methods' => ['GET']],
    'api/addons_list' => ['file' => 'api/user/addons_list.php', 'methods' => ['GET']],
];
?>