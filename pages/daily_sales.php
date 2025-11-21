<div class="page-content">
  <div class="page-header">
    <h1><i class="fas fa-chart-bar"></i> Daily Sales</h1>
    <p>View daily sales performance and transactions</p>
  </div>

  <!-- Date Selector -->
  <div style="display: flex; gap: 12px; margin-bottom: 24px; align-items: center;">
    <input type="date" class="form-control" style="width: 200px;" value="<?= date('Y-m-d'); ?>">
    <button class="btn btn-primary">
      <i class="fas fa-calendar"></i> View Report
    </button>
    <button class="btn" style="background: #f3f4f6; color: #374151;">
      <i class="fas fa-download"></i> Export
    </button>
  </div>

  <!-- KPI Cards -->
  <div class="dashboard-grid">
    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-dollar-sign"></i>
          <span>Today's Revenue</span>
        </div>
      </div>
      <div class="stat-value">$2,450</div>
      <div class="stat-label">Total sales today</div>
      <div class="stat-change positive">
        <i class="fas fa-arrow-up"></i> +12% from yesterday
      </div>
    </div>

    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-shopping-cart"></i>
          <span>Transactions</span>
        </div>
      </div>
      <div class="stat-value">47</div>
      <div class="stat-label">Completed today</div>
      <div class="stat-change positive">
        <i class="fas fa-arrow-up"></i> +8 from yesterday
      </div>
    </div>

    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-users"></i>
          <span>Active Agents</span>
        </div>
      </div>
      <div class="stat-value">28</div>
      <div class="stat-label">Making sales today</div>
      <div class="stat-change positive">
        <i class="fas fa-arrow-up"></i> +3 from yesterday
      </div>
    </div>

    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-chart-line"></i>
          <span>Average Order</span>
        </div>
      </div>
      <div class="stat-value">$52.13</div>
      <div class="stat-label">Per transaction</div>
      <div class="stat-change negative">
        <i class="fas fa-arrow-down"></i> -2% from yesterday
      </div>
    </div>
  </div>

  <!-- Sales Chart -->
  <div class="page-content" style="margin-top: 24px; margin-bottom: 24px;">
    <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 16px;">Sales Trend (Last 7 Days)</h2>
    <div style="height: 300px; display: flex; align-items: center; justify-content: center; background: #f9fafb; border-radius: 8px; border: 2px dashed #d1d5db;">
      <div style="text-align: center; color: #9ca3af;">
        <i class="fas fa-chart-area" style="font-size: 48px; margin-bottom: 16px; display: block; opacity: 0.5;"></i>
        <div style="font-size: 16px; font-weight: 500;">Sales Chart</div>
        <div style="font-size: 14px;">Line chart showing daily sales trends</div>
      </div>
    </div>
  </div>

  <!-- Recent Transactions -->
  <div class="page-content">
    <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 16px;">Recent Transactions</h2>
    <table class="data-table">
      <thead>
        <tr>
          <th>Transaction ID</th>
          <th>Agent</th>
          <th>Device Type</th>
          <th>Quantity</th>
          <th>Amount</th>
          <th>Time</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#TXN-2025-001</td>
          <td>John Smith</td>
          <td>Smartphone</td>
          <td>2</td>
          <td>$120.00</td>
          <td>10:45 AM</td>
          <td><span class="status-badge approved">Completed</span></td>
        </tr>
        <tr>
          <td>#TXN-2025-002</td>
          <td>Sarah Johnson</td>
          <td>Tablet</td>
          <td>1</td>
          <td>$65.00</td>
          <td>10:32 AM</td>
          <td><span class="status-badge approved">Completed</span></td>
        </tr>
        <tr>
          <td>#TXN-2025-003</td>
          <td>Mike Davis</td>
          <td>Hotspot</td>
          <td>3</td>
          <td>$90.00</td>
          <td>10:18 AM</td>
          <td><span class="status-badge approved">Completed</span></td>
        </tr>
        <tr>
          <td>#TXN-2025-004</td>
          <td>Emily Brown</td>
          <td>Smartphone</td>
          <td>1</td>
          <td>$60.00</td>
          <td>10:05 AM</td>
          <td><span class="status-badge approved">Completed</span></td>
        </tr>
        <tr>
          <td>#TXN-2025-005</td>
          <td>David Wilson</td>
          <td>Accessory Kit</td>
          <td>5</td>
          <td>$75.00</td>
          <td>09:52 AM</td>
          <td><span class="status-badge approved">Completed</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

