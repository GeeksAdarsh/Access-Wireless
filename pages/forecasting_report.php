<div class="page-content">
  <div class="page-header">
    <h1><i class="fas fa-chart-line"></i> Forecasting Report</h1>
    <p>Analyze inventory trends and forecast future demand</p>
  </div>

  <!-- Filters -->
  <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 24px;">
    <div class="form-group" style="margin-bottom: 0;">
      <label class="form-label">Date Range</label>
      <select class="form-control">
        <option>Last 7 Days</option>
        <option>Last 30 Days</option>
        <option>Last 3 Months</option>
        <option>Last 6 Months</option>
        <option>Custom Range</option>
      </select>
    </div>
    <div class="form-group" style="margin-bottom: 0;">
      <label class="form-label">Region</label>
      <select class="form-control">
        <option>All Regions</option>
        <option>North</option>
        <option>South</option>
        <option>East</option>
        <option>West</option>
      </select>
    </div>
    <div class="form-group" style="margin-bottom: 0;">
      <label class="form-label">Device Type</label>
      <select class="form-control">
        <option>All Devices</option>
        <option>Smartphone</option>
        <option>Tablet</option>
        <option>Hotspot</option>
      </select>
    </div>
    <div class="form-group" style="margin-bottom: 0;">
      <label class="form-label">View Type</label>
      <select class="form-control">
        <option>Line Chart</option>
        <option>Bar Chart</option>
        <option>Area Chart</option>
      </select>
    </div>
  </div>

  <!-- Trend Summary Cards -->
  <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 24px;">
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-arrow-up"></i>
        <span>Demand Trend</span>
      </div>
      <div class="stat-value" style="font-size: 24px;">+15%</div>
      <div class="stat-label" style="font-size: 11px;">vs last period</div>
    </div>
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-box"></i>
        <span>Projected Need</span>
      </div>
      <div class="stat-value" style="font-size: 24px;">1,450</div>
      <div class="stat-label" style="font-size: 11px;">units next month</div>
    </div>
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-chart-line"></i>
        <span>Growth Rate</span>
      </div>
      <div class="stat-value" style="font-size: 24px;">8.2%</div>
      <div class="stat-label" style="font-size: 11px;">monthly average</div>
    </div>
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-exclamation-triangle"></i>
        <span>Low Stock Alert</span>
      </div>
      <div class="stat-value" style="font-size: 24px;">12</div>
      <div class="stat-label" style="font-size: 11px;">items need restock</div>
    </div>
  </div>

  <!-- Chart Placeholder -->
  <div class="page-content" style="margin-bottom: 24px;">
    <div style="height: 400px; display: flex; align-items: center; justify-content: center; background: #f9fafb; border-radius: 8px; border: 2px dashed #d1d5db;">
      <div style="text-align: center; color: #9ca3af;">
        <i class="fas fa-chart-line" style="font-size: 48px; margin-bottom: 16px; display: block; opacity: 0.5;"></i>
        <div style="font-size: 16px; font-weight: 500; margin-bottom: 8px;">Forecasting Chart</div>
        <div style="font-size: 14px;">Line chart showing inventory demand trends over time</div>
      </div>
    </div>
  </div>

  <!-- Data Table -->
  <div class="page-content">
    <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 16px;">Forecasted Demand by Device Type</h2>
    <table class="data-table">
      <thead>
        <tr>
          <th>Device Type</th>
          <th>Current Stock</th>
          <th>Projected Demand</th>
          <th>Recommended Order</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Smartphone</td>
          <td>450</td>
          <td>520</td>
          <td>70</td>
          <td><span class="status-badge approved">Good</span></td>
        </tr>
        <tr>
          <td>Tablet</td>
          <td>320</td>
          <td>380</td>
          <td>60</td>
          <td><span class="status-badge approved">Good</span></td>
        </tr>
        <tr>
          <td>Hotspot</td>
          <td>180</td>
          <td>250</td>
          <td>70</td>
          <td><span class="status-badge pending">Monitor</span></td>
        </tr>
        <tr>
          <td>Accessory Kit</td>
          <td>95</td>
          <td>150</td>
          <td>55</td>
          <td><span class="status-badge rejected">Low Stock</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

