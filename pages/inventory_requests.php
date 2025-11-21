<div class="page-content">
  <div class="page-header">
    <h1><i class="fas fa-shopping-cart"></i> Inventory Requests</h1>
    <p>Manage and review inventory requests from agents</p>
  </div>

  <!-- Search and Filters -->
  <div class="search-filter-bar">
    <input type="text" class="search-input" placeholder="Search by Request ID, Agent Name, or Device Type...">
    <select class="form-control" style="width: 180px;">
      <option>All Status</option>
      <option>Pending</option>
      <option>Approved</option>
      <option>Rejected</option>
    </select>
    <select class="form-control" style="width: 180px;">
      <option>All Devices</option>
      <option>Smartphone</option>
      <option>Tablet</option>
      <option>Hotspot</option>
    </select>
    <button class="btn btn-primary">
      <i class="fas fa-filter"></i> Apply Filters
    </button>
  </div>

  <!-- Requests Table -->
  <div style="overflow-x: auto;">
    <table class="data-table">
      <thead>
        <tr>
          <th>Request ID</th>
          <th>Agent Name</th>
          <th>Device Type</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#REQ-2025-001</td>
          <td>John Smith</td>
          <td>Smartphone</td>
          <td>5</td>
          <td><span class="status-badge pending">Pending</span></td>
          <td>2025-11-21</td>
          <td>
            <button class="btn btn-success btn-sm"><i class="fas fa-check"></i> Approve</button>
            <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Reject</button>
          </td>
        </tr>
        <tr>
          <td>#REQ-2025-002</td>
          <td>Sarah Johnson</td>
          <td>Tablet</td>
          <td>3</td>
          <td><span class="status-badge approved">Approved</span></td>
          <td>2025-11-20</td>
          <td>
            <button class="btn btn-success btn-sm" disabled><i class="fas fa-check"></i> Approved</button>
          </td>
        </tr>
        <tr>
          <td>#REQ-2025-003</td>
          <td>Mike Davis</td>
          <td>Hotspot</td>
          <td>10</td>
          <td><span class="status-badge pending">Pending</span></td>
          <td>2025-11-21</td>
          <td>
            <button class="btn btn-success btn-sm"><i class="fas fa-check"></i> Approve</button>
            <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Reject</button>
          </td>
        </tr>
        <tr>
          <td>#REQ-2025-004</td>
          <td>Emily Brown</td>
          <td>Smartphone</td>
          <td>2</td>
          <td><span class="status-badge rejected">Rejected</span></td>
          <td>2025-11-19</td>
          <td>
            <button class="btn btn-danger btn-sm" disabled><i class="fas fa-times"></i> Rejected</button>
          </td>
        </tr>
        <tr>
          <td>#REQ-2025-005</td>
          <td>David Wilson</td>
          <td>Tablet</td>
          <td>7</td>
          <td><span class="status-badge pending">Pending</span></td>
          <td>2025-11-21</td>
          <td>
            <button class="btn btn-success btn-sm"><i class="fas fa-check"></i> Approve</button>
            <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Reject</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
    <div style="font-size: 14px; color: #6b7280;">
      Showing 1-5 of 23 requests
    </div>
    <div style="display: flex; gap: 8px;">
      <button class="btn btn-sm" style="background: #f3f4f6; color: #374151;">Previous</button>
      <button class="btn btn-sm btn-primary">1</button>
      <button class="btn btn-sm" style="background: #f3f4f6; color: #374151;">2</button>
      <button class="btn btn-sm" style="background: #f3f4f6; color: #374151;">3</button>
      <button class="btn btn-sm" style="background: #f3f4f6; color: #374151;">Next</button>
    </div>
  </div>
</div>

