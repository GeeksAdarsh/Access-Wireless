<?php
session_start();
include 'db.php';
if (!isset($_SESSION['user_id'])) {
  header("Location: auth.php");
  exit;
}

// Get current page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Access Wireless</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      background-color: #f5f7fa;
      overflow-x: hidden;
    }

    /* Sidebar Styles */
    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      width: 260px;
      height: 100vh;
      background: linear-gradient(180deg, #1a1f3a 0%, #2d3561 100%);
      color: #ffffff;
      overflow-y: auto;
      overflow-x: hidden;
      z-index: 1000;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar::-webkit-scrollbar {
      width: 6px;
    }

    .sidebar::-webkit-scrollbar-track {
      background: rgba(255, 255, 255, 0.05);
    }

    .sidebar::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 3px;
    }

    .sidebar-header {
      padding: 24px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-header h3 {
      font-size: 20px;
      font-weight: 600;
      color: #ffffff;
    }

    .access-wireless-logo {
      display: flex;
      align-items: center;
      gap: 8px;
      font-family: 'Segoe UI', Arial, sans-serif;
    }

    .logo-access {
      color: #7cb342;
      font-size: 20px;
      font-weight: 400;
      letter-spacing: 1px;
    }

    .logo-wireless {
      color: #ffffff;
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 1px;
      position: relative;
    }

    .wireless-signal {
      position: relative;
      display: inline-block;
    }

    .signal-dot {
      width: 6px;
      height: 6px;
      background: #4a90e2;
      border-radius: 50%;
      position: absolute;
      top: -1px;
      left: 50%;
      transform: translateX(-50%);
    }

    .signal-arcs {
      position: absolute;
      top: -8px;
      left: 50%;
      transform: translateX(-50%);
      width: 16px;
      height: 10px;
    }

    .signal-arc {
      position: absolute;
      border: 1.5px solid;
      border-radius: 50%;
      border-top: none;
    }

    .signal-arc.arc1 {
      width: 6px;
      height: 3px;
      border-color: #4a90e2;
      left: 5px;
      top: 7px;
    }

    .signal-arc.arc2 {
      width: 10px;
      height: 5px;
      border-color: #7cb342;
      left: 3px;
      top: 5px;
    }

    .signal-arc.arc3 {
      width: 14px;
      height: 7px;
      border-color: #558b2f;
      left: 1px;
      top: 3px;
    }

    .logo-registered {
      font-size: 8px;
      color: rgba(255, 255, 255, 0.7);
      vertical-align: super;
      margin-left: 2px;
    }

    .sidebar-menu {
      padding: 16px 0;
    }

    .menu-item {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      color: #e0e4eb;
      text-decoration: none;
      transition: all 0.2s ease;
      cursor: pointer;
      border-left: 3px solid transparent;
    }

    .menu-item:hover {
      background-color: rgba(255, 255, 255, 0.08);
      color: #ffffff;
      border-left-color: #4a90e2;
    }

    .menu-item.active {
      background-color: rgba(255, 255, 255, 0.12);
      color: #ffffff;
      border-left-color: #4a90e2;
      font-weight: 500;
    }

    .menu-item i {
      width: 20px;
      margin-right: 12px;
      font-size: 16px;
      text-align: center;
    }

    .menu-item-text {
      flex: 1;
      font-size: 14px;
    }

    .menu-item-arrow {
      font-size: 12px;
      transition: transform 0.2s ease;
    }

    .menu-item.expanded .menu-item-arrow {
      transform: rotate(180deg);
    }

    .submenu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
      background-color: rgba(0, 0, 0, 0.2);
    }

    .menu-item.expanded + .submenu {
      max-height: 1000px;
    }

    .submenu-item {
      display: flex;
      align-items: center;
      padding: 10px 20px 10px 52px;
      color: #c8d0dc;
      text-decoration: none;
      transition: all 0.2s ease;
      font-size: 13px;
      border-left: 3px solid transparent;
    }

    .submenu-item:hover {
      background-color: rgba(255, 255, 255, 0.06);
      color: #ffffff;
    }

    .submenu-item.active {
      background-color: rgba(255, 255, 255, 0.1);
      color: #ffffff;
      border-left-color: #4a90e2;
      font-weight: 500;
    }

    .submenu-item i {
      width: 18px;
      margin-right: 10px;
      font-size: 14px;
    }

    /* Main Content Area */
    .main-content {
      margin-left: 260px;
      min-height: 100vh;
      padding: 24px;
    }

    /* Top Bar */
    .top-bar {
      background: #ffffff;
      padding: 20px 24px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
      margin-bottom: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .top-bar-left {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .user-profile-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid #e5e7eb;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 600;
      font-size: 18px;
    }

    .user-profile-circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .welcome-text h2 {
      font-size: 20px;
      font-weight: 600;
      color: #1f2937;
      margin: 0;
    }

    .welcome-text p {
      font-size: 14px;
      color: #6b7280;
      margin: 2px 0 0 0;
    }

    .logout-btn {
      padding: 10px 20px;
      background: #ef4444;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: 500;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.2s ease;
      text-decoration: none;
      display: inline-block;
    }

    .logout-btn:hover {
      background: #dc2626;
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
    }

    /* Dashboard Cards */
    .dashboard-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-bottom: 24px;
    }

    .dashboard-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
      transition: all 0.2s ease;
    }

    .dashboard-card:hover {
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
      transform: translateY(-2px);
    }

    .card-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
    }

    .card-title {
      font-size: 14px;
      font-weight: 600;
      color: #1f2937;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .card-title i {
      color: #667eea;
      font-size: 18px;
    }

    .stat-value {
      font-size: 32px;
      font-weight: 700;
      color: #1f2937;
      margin-bottom: 8px;
    }

    .stat-label {
      font-size: 13px;
      color: #6b7280;
      margin-bottom: 8px;
    }

    .stat-change {
      font-size: 12px;
      padding: 4px 8px;
      border-radius: 6px;
      display: inline-block;
    }

    .stat-change.positive {
      background: #d1fae5;
      color: #065f46;
    }

    .stat-change.negative {
      background: #fee2e2;
      color: #991b1b;
    }

    /* Page Content */
    .page-content {
      background: #ffffff;
      border-radius: 12px;
      padding: 24px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }

    .page-header {
      margin-bottom: 24px;
      padding-bottom: 16px;
      border-bottom: 1px solid #e5e7eb;
    }

    .page-header h1 {
      font-size: 24px;
      font-weight: 600;
      color: #1f2937;
      margin-bottom: 8px;
    }

    .page-header p {
      font-size: 14px;
      color: #6b7280;
    }

    /* Table Styles */
    .data-table {
      width: 100%;
      border-collapse: collapse;
    }

    .data-table thead {
      background: #f9fafb;
    }

    .data-table th {
      padding: 12px 16px;
      text-align: left;
      font-size: 13px;
      font-weight: 600;
      color: #374151;
      border-bottom: 2px solid #e5e7eb;
    }

    .data-table td {
      padding: 12px 16px;
      font-size: 14px;
      color: #1f2937;
      border-bottom: 1px solid #f3f4f6;
    }

    .data-table tbody tr:hover {
      background: #f9fafb;
    }

    /* Status Badge */
    .status-badge {
      padding: 4px 12px;
      border-radius: 12px;
      font-size: 12px;
      font-weight: 500;
      display: inline-block;
    }

    .status-badge.approved {
      background: #d1fae5;
      color: #065f46;
    }

    .status-badge.pending {
      background: #fef3c7;
      color: #92400e;
    }

    .status-badge.rejected {
      background: #fee2e2;
      color: #991b1b;
    }

    .status-badge.low-stock {
      background: #fee2e2;
      color: #991b1b;
    }

    /* Form Styles */
    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      font-size: 14px;
      font-weight: 500;
      color: #374151;
      margin-bottom: 8px;
    }

    .form-control {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      font-size: 14px;
      transition: all 0.2s ease;
    }

    .form-control:focus {
      outline: none;
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn-primary {
      background: #667eea;
      color: white;
    }

    .btn-primary:hover {
      background: #5568d3;
    }

    .btn-success {
      background: #10b981;
      color: white;
    }

    .btn-success:hover {
      background: #059669;
    }

    .btn-danger {
      background: #ef4444;
      color: white;
    }

    .btn-danger:hover {
      background: #dc2626;
    }

    .btn-sm {
      padding: 6px 12px;
      font-size: 12px;
    }

    /* Search and Filters */
    .search-filter-bar {
      display: flex;
      gap: 12px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .search-input {
      flex: 1;
      min-width: 200px;
      padding: 10px 12px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      font-size: 14px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-100%);
        transition: transform 0.3s ease;
      }

      .sidebar.open {
        transform: translateX(0);
      }

      .main-content {
        margin-left: 0;
        padding: 16px;
      }

      .dashboard-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="access-wireless-logo">
        <span class="logo-access">access</span>
        <span class="logo-wireless">
          WIRE<span class="wireless-signal">
            L<span class="signal-dot"></span>
            <div class="signal-arcs">
              <div class="signal-arc arc1"></div>
              <div class="signal-arc arc2"></div>
              <div class="signal-arc arc3"></div>
            </div>
          </span>SS
          <span class="logo-registered">®</span>
        </span>
      </div>
    </div>
    <div class="sidebar-menu">
      <a href="?page=home" class="menu-item <?= $page == 'home' ? 'active' : '' ?>">
        <i class="fas fa-home"></i>
        <span class="menu-item-text">Home</span>
      </a>

      <div class="menu-item <?= in_array($page, ['agent_logins', 'supervisors']) ? 'expanded' : '' ?>" onclick="toggleSubmenu(this)">
        <i class="fas fa-folder"></i>
        <span class="menu-item-text">CGM Agent Logins & Supervisors</span>
        <i class="fas fa-chevron-down menu-item-arrow"></i>
      </div>
      <div class="submenu" style="<?= in_array($page, ['agent_logins', 'supervisors']) ? 'max-height: 1000px;' : '' ?>">
        <a href="?page=agent_logins" class="submenu-item <?= $page == 'agent_logins' ? 'active' : '' ?>">
          <i class="fas fa-user-circle"></i>
          <span>Agent Logins</span>
        </a>
        <a href="?page=supervisors" class="submenu-item <?= $page == 'supervisors' ? 'active' : '' ?>">
          <i class="fas fa-users"></i>
          <span>Supervisors</span>
        </a>
      </div>

      <div class="menu-item <?= in_array($page, ['assignment', 'forecasting', 'requests', 'on_hand', 'same_day', 'device_counts', 'inventory_age']) ? 'expanded' : '' ?>" onclick="toggleSubmenu(this)">
        <i class="fas fa-folder"></i>
        <span class="menu-item-text">Inventory Tools</span>
        <i class="fas fa-chevron-down menu-item-arrow"></i>
      </div>
      <div class="submenu" style="<?= in_array($page, ['assignment', 'forecasting', 'requests', 'on_hand', 'same_day', 'device_counts', 'inventory_age']) ? 'max-height: 1000px;' : '' ?>">
        <a href="?page=assignment" class="submenu-item <?= $page == 'assignment' ? 'active' : '' ?>">
          <i class="fas fa-exchange-alt"></i>
          <span>Inventory Assignment Tool</span>
        </a>
        <a href="?page=forecasting" class="submenu-item <?= $page == 'forecasting' ? 'active' : '' ?>">
          <i class="fas fa-chart-line"></i>
          <span>Forecasting Report</span>
        </a>
        <a href="?page=requests" class="submenu-item <?= $page == 'requests' ? 'active' : '' ?>">
          <i class="fas fa-shopping-cart"></i>
          <span>Inventory Requests</span>
        </a>
        <a href="?page=on_hand" class="submenu-item <?= $page == 'on_hand' ? 'active' : '' ?>">
          <i class="fas fa-box"></i>
          <span>On Hand Inventory</span>
        </a>
        <a href="?page=same_day" class="submenu-item <?= $page == 'same_day' ? 'active' : '' ?>">
          <i class="fas fa-sync-alt"></i>
          <span>Same Day Swap</span>
        </a>
        <a href="?page=device_counts" class="submenu-item <?= $page == 'device_counts' ? 'active' : '' ?>">
          <i class="fas fa-file-alt"></i>
          <span>Device Counts by Store/Assignments</span>
        </a>
        <a href="?page=inventory_age" class="submenu-item <?= $page == 'inventory_age' ? 'active' : '' ?>">
          <i class="fas fa-file-alt"></i>
          <span>Inventory Age by Store/Assignments</span>
        </a>
      </div>

      <div class="menu-item <?= in_array($page, ['daily_sales', 'monthly_reports']) ? 'expanded' : '' ?>" onclick="toggleSubmenu(this)">
        <i class="fas fa-folder"></i>
        <span class="menu-item-text">Sales Reports</span>
        <i class="fas fa-chevron-down menu-item-arrow"></i>
      </div>
      <div class="submenu" style="<?= in_array($page, ['daily_sales', 'monthly_reports']) ? 'max-height: 1000px;' : '' ?>">
        <a href="?page=daily_sales" class="submenu-item <?= $page == 'daily_sales' ? 'active' : '' ?>">
          <i class="fas fa-chart-bar"></i>
          <span>Daily Sales</span>
        </a>
        <a href="?page=monthly_reports" class="submenu-item <?= $page == 'monthly_reports' ? 'active' : '' ?>">
          <i class="fas fa-chart-pie"></i>
          <span>Monthly Reports</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <div class="user-profile-circle">
          <?= strtoupper(substr(htmlspecialchars($_SESSION['user'] ?? 'U'), 0, 1)); ?>
        </div>
        <div class="welcome-text">
          <h2>Welcome, <?= htmlspecialchars($_SESSION['user'] ?? 'User'); ?>!</h2>
          <p><?= htmlspecialchars($_SESSION['email'] ?? ''); ?></p>
        </div>
      </div>
      <a href="logout.php" class="logout-btn">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>

    <?php
    // Include page content based on $page variable
    switch($page) {
      case 'home':
        include 'pages/home.php';
        break;
      case 'requests':
        include 'pages/inventory_requests.php';
        break;
      case 'assignment':
        include 'pages/inventory_assignment.php';
        break;
      case 'forecasting':
        include 'pages/forecasting_report.php';
        break;
      case 'on_hand':
        include 'pages/on_hand_inventory.php';
        break;
      case 'device_counts':
        include 'pages/device_counts.php';
        break;
      case 'daily_sales':
        include 'pages/daily_sales.php';
        break;
      case 'monthly_reports':
        include 'pages/monthly_reports.php';
        break;
      case 'agent_logins':
        include 'pages/agent_logins.php';
        break;
      case 'supervisors':
        include 'pages/supervisors.php';
        break;
      case 'same_day':
        include 'pages/same_day.php';
        break;
      case 'inventory_age':
        include 'pages/inventory_age.php';
        break;
      default:
        include 'pages/home.php';
    }
    ?>
  </div>

  <script>
    function toggleSubmenu(element) {
      element.classList.toggle('expanded');
    }
  </script>
</body>
</html>
