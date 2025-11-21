<div class="page-content">
  <div class="page-header">
    <h1><i class="fas fa-chart-pie"></i> Monthly Reports</h1>
    <p>Comprehensive monthly sales and performance analysis</p>
  </div>

  <!-- Month Selector -->
  <div style="display: flex; gap: 12px; margin-bottom: 24px; align-items: center;">
    <select class="form-control" style="width: 200px;">
      <option>November 2025</option>
      <option>October 2025</option>
      <option>September 2025</option>
      <option>August 2025</option>
    </select>
    <button class="btn btn-primary">
      <i class="fas fa-search"></i> Generate Report
    </button>
    <button class="btn" style="background: #f3f4f6; color: #374151;">
      <i class="fas fa-download"></i> Export PDF
    </button>
  </div>

  <!-- Revenue Summary -->
  <div class="dashboard-grid">
    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-dollar-sign"></i>
          <span>Total Revenue</span>
        </div>
      </div>
      <div class="stat-value">$45,200</div>
      <div class="stat-label">This month</div>
      <div class="stat-change positive">
        <i class="fas fa-arrow-up"></i> +18% from last month
      </div>
    </div>

    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-shopping-cart"></i>
          <span>Total Transactions</span>
        </div>
      </div>
      <div class="stat-value">1,247</div>
      <div class="stat-label">Completed this month</div>
      <div class="stat-change positive">
        <i class="fas fa-arrow-up"></i> +15% from last month
      </div>
    </div>

    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-users"></i>
          <span>Active Agents</span>
        </div>
      </div>
      <div class="stat-value">342</div>
      <div class="stat-label">Average per day</div>
      <div class="stat-change positive">
        <i class="fas fa-arrow-up"></i> +8% from last month
      </div>
    </div>

    <div class="dashboard-card">
      <div class="card-header">
        <div class="card-title">
          <i class="fas fa-chart-line"></i>
          <span>Average Order Value</span>
        </div>
      </div>
      <div class="stat-value">$36.25</div>
      <div class="stat-label">Per transaction</div>
      <div class="stat-change positive">
        <i class="fas fa-arrow-up"></i> +5% from last month
      </div>
    </div>
  </div>

  <!-- Comparative Chart -->
  <div class="page-content" style="margin-top: 24px; margin-bottom: 24px;">
    <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 16px;">Monthly Revenue Comparison</h2>
    <div style="height: 350px; display: flex; align-items: center; justify-content: center; background: #f9fafb; border-radius: 8px; border: 2px dashed #d1d5db;">
      <div style="text-align: center; color: #9ca3af;">
        <i class="fas fa-chart-bar" style="font-size: 48px; margin-bottom: 16px; display: block; opacity: 0.5;"></i>
        <div style="font-size: 16px; font-weight: 500;">Comparative Bar Chart</div>
        <div style="font-size: 14px;">Comparing current month with previous months</div>
      </div>
    </div>
  </div>

  <!-- Top Performers -->
  <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
    <!-- Top Agents -->
    <div class="page-content">
      <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 16px;">Top Performing Agents</h2>
      <table class="data-table">
        <thead>
          <tr>
            <th>Agent</th>
            <th>Sales</th>
            <th>Revenue</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>John Smith</strong></td>
            <td>127</td>
            <td>$4,580</td>
          </tr>
          <tr>
            <td><strong>Sarah Johnson</strong></td>
            <td>115</td>
            <td>$4,140</td>
          </tr>
          <tr>
            <td><strong>Mike Davis</strong></td>
            <td>98</td>
            <td>$3,528</td>
          </tr>
          <tr>
            <td><strong>Emily Brown</strong></td>
            <td>87</td>
            <td>$3,132</td>
          </tr>
          <tr>
            <td><strong>David Wilson</strong></td>
            <td>82</td>
            <td>$2,952</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Top Products -->
    <div class="page-content">
      <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 16px;">Top Selling Products</h2>
      <table class="data-table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Units Sold</th>
            <th>Revenue</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Smartphone - Model A</strong></td>
            <td>450</td>
            <td>$27,000</td>
          </tr>
          <tr>
            <td><strong>Tablet - Standard</strong></td>
            <td>320</td>
            <td>$20,800</td>
          </tr>
          <tr>
            <td><strong>Hotspot Device</strong></td>
            <td>180</td>
            <td>$5,400</td>
          </tr>
          <tr>
            <td><strong>Accessory Kit</strong></td>
            <td>95</td>
            <td>$1,425</td>
          </tr>
          <tr>
            <td><strong>Charger Cable</strong></td>
            <td>202</td>
            <td>$1,010</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

