<div class="page-content">
  <div class="page-header">
    <h1><i class="fas fa-box"></i> On Hand Inventory</h1>
    <p>View current inventory levels and stock status</p>
  </div>

  <!-- Search and Filters -->
  <div class="search-filter-bar">
    <input type="text" class="search-input" placeholder="Search by device type, SKU, or location...">
    <select class="form-control" style="width: 180px;">
      <option>All Locations</option>
      <option>Store #101</option>
      <option>Store #102</option>
      <option>Store #103</option>
      <option>Store #104</option>
    </select>
    <select class="form-control" style="width: 180px;">
      <option>All Status</option>
      <option>In Stock</option>
      <option>Low Stock</option>
      <option>Out of Stock</option>
    </select>
    <button class="btn btn-primary">
      <i class="fas fa-download"></i> Export
    </button>
  </div>

  <!-- Inventory Table -->
  <div style="overflow-x: auto;">
    <table class="data-table">
      <thead>
        <tr>
          <th>Device Type</th>
          <th>SKU</th>
          <th>Total Stock</th>
          <th>Assigned</th>
          <th>Available</th>
          <th>Location</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Smartphone - Model A</strong></td>
          <td>SP-A-001</td>
          <td>450</td>
          <td>320</td>
          <td>130</td>
          <td>Store #101</td>
          <td><span class="status-badge approved">In Stock</span></td>
        </tr>
        <tr>
          <td><strong>Smartphone - Model B</strong></td>
          <td>SP-B-002</td>
          <td>380</td>
          <td>290</td>
          <td>90</td>
          <td>Store #102</td>
          <td><span class="status-badge approved">In Stock</span></td>
        </tr>
        <tr>
          <td><strong>Tablet - Standard</strong></td>
          <td>TB-STD-001</td>
          <td>320</td>
          <td>250</td>
          <td>70</td>
          <td>Store #103</td>
          <td><span class="status-badge approved">In Stock</span></td>
        </tr>
        <tr>
          <td><strong>Hotspot Device</strong></td>
          <td>HS-001</td>
          <td>180</td>
          <td>165</td>
          <td>15</td>
          <td>Store #104</td>
          <td><span class="status-badge low-stock">Low Stock</span></td>
        </tr>
        <tr>
          <td><strong>Accessory Kit</strong></td>
          <td>ACC-KIT-001</td>
          <td>95</td>
          <td>88</td>
          <td>7</td>
          <td>Store #101</td>
          <td><span class="status-badge low-stock">Low Stock</span></td>
        </tr>
        <tr>
          <td><strong>Charger Cable</strong></td>
          <td>CHG-001</td>
          <td>520</td>
          <td>480</td>
          <td>40</td>
          <td>Store #102</td>
          <td><span class="status-badge approved">In Stock</span></td>
        </tr>
        <tr>
          <td><strong>Protective Case</strong></td>
          <td>CASE-001</td>
          <td>280</td>
          <td>275</td>
          <td>5</td>
          <td>Store #103</td>
          <td><span class="status-badge low-stock">Low Stock</span></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Summary Stats -->
  <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 24px;">
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-boxes"></i>
        <span>Total Items</span>
      </div>
      <div class="stat-value" style="font-size: 28px;">2,225</div>
    </div>
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-check-circle"></i>
        <span>Available</span>
      </div>
      <div class="stat-value" style="font-size: 28px;">357</div>
    </div>
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-user-check"></i>
        <span>Assigned</span>
      </div>
      <div class="stat-value" style="font-size: 28px;">1,868</div>
    </div>
    <div class="dashboard-card">
      <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
        <i class="fas fa-exclamation-triangle"></i>
        <span>Low Stock</span>
      </div>
      <div class="stat-value" style="font-size: 28px; color: #ef4444;">3</div>
    </div>
  </div>
</div>

