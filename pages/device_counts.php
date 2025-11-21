<div style="display: grid; grid-template-columns: 350px 1fr; gap: 24px;">
  <!-- Store List -->
  <div class="page-content">
    <div class="page-header">
      <h1 style="font-size: 18px;"><i class="fas fa-store"></i> Stores</h1>
    </div>
    <div style="max-height: 600px; overflow-y: auto;">
      <div style="padding: 16px; background: #f9fafb; border-radius: 8px; margin-bottom: 12px; cursor: pointer; border: 2px solid #667eea;">
        <div style="font-weight: 600; color: #1f2937; margin-bottom: 4px;">Store #101 - Downtown</div>
        <div style="font-size: 12px; color: #6b7280;">Total Devices: 450</div>
        <div style="font-size: 12px; color: #6b7280;">Available: 130</div>
      </div>
      <div style="padding: 16px; background: #ffffff; border-radius: 8px; margin-bottom: 12px; cursor: pointer; border: 1px solid #e5e7eb;">
        <div style="font-weight: 600; color: #1f2937; margin-bottom: 4px;">Store #102 - Mall Location</div>
        <div style="font-size: 12px; color: #6b7280;">Total Devices: 380</div>
        <div style="font-size: 12px; color: #6b7280;">Available: 90</div>
      </div>
      <div style="padding: 16px; background: #ffffff; border-radius: 8px; margin-bottom: 12px; cursor: pointer; border: 1px solid #e5e7eb;">
        <div style="font-weight: 600; color: #1f2937; margin-bottom: 4px;">Store #103 - Airport</div>
        <div style="font-size: 12px; color: #6b7280;">Total Devices: 320</div>
        <div style="font-size: 12px; color: #6b7280;">Available: 70</div>
      </div>
      <div style="padding: 16px; background: #ffffff; border-radius: 8px; margin-bottom: 12px; cursor: pointer; border: 1px solid #e5e7eb;">
        <div style="font-weight: 600; color: #1f2937; margin-bottom: 4px;">Store #104 - Suburban</div>
        <div style="font-size: 12px; color: #6b7280;">Total Devices: 275</div>
        <div style="font-size: 12px; color: #6b7280;">Available: 67</div>
      </div>
    </div>
  </div>

  <!-- Store Details -->
  <div class="page-content">
    <div class="page-header">
      <h1>Store #101 - Downtown</h1>
      <p>Device breakdown and assignment details</p>
    </div>

    <!-- Store Stats -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 24px;">
      <div class="dashboard-card">
        <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
          <i class="fas fa-box"></i>
          <span>Total Devices</span>
        </div>
        <div class="stat-value" style="font-size: 24px;">450</div>
      </div>
      <div class="dashboard-card">
        <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
          <i class="fas fa-check-circle"></i>
          <span>Available</span>
        </div>
        <div class="stat-value" style="font-size: 24px;">130</div>
      </div>
      <div class="dashboard-card">
        <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
          <i class="fas fa-user-check"></i>
          <span>Assigned</span>
        </div>
        <div class="stat-value" style="font-size: 24px;">320</div>
      </div>
      <div class="dashboard-card">
        <div class="card-title" style="font-size: 12px; margin-bottom: 8px;">
          <i class="fas fa-users"></i>
          <span>Active Agents</span>
        </div>
        <div class="stat-value" style="font-size: 24px;">45</div>
      </div>
    </div>

    <!-- Device Breakdown Table -->
    <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 16px;">Device Counts by Type</h2>
    <table class="data-table">
      <thead>
        <tr>
          <th>Device Type</th>
          <th>Total</th>
          <th>Assigned</th>
          <th>Available</th>
          <th>Utilization</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Smartphone - Model A</strong></td>
          <td>200</td>
          <td>140</td>
          <td>60</td>
          <td>
            <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
              <div style="background: #10b981; height: 100%; width: 70%;"></div>
            </div>
            <span style="font-size: 12px; color: #6b7280; margin-left: 8px;">70%</span>
          </td>
        </tr>
        <tr>
          <td><strong>Smartphone - Model B</strong></td>
          <td>150</td>
          <td>110</td>
          <td>40</td>
          <td>
            <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
              <div style="background: #10b981; height: 100%; width: 73%;"></div>
            </div>
            <span style="font-size: 12px; color: #6b7280; margin-left: 8px;">73%</span>
          </td>
        </tr>
        <tr>
          <td><strong>Tablet - Standard</strong></td>
          <td>70</td>
          <td>50</td>
          <td>20</td>
          <td>
            <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
              <div style="background: #f59e0b; height: 100%; width: 71%;"></div>
            </div>
            <span style="font-size: 12px; color: #6b7280; margin-left: 8px;">71%</span>
          </td>
        </tr>
        <tr>
          <td><strong>Hotspot Device</strong></td>
          <td>30</td>
          <td>20</td>
          <td>10</td>
          <td>
            <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
              <div style="background: #10b981; height: 100%; width: 67%;"></div>
            </div>
            <span style="font-size: 12px; color: #6b7280; margin-left: 8px;">67%</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

