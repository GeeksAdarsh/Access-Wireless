<div style="display: grid; grid-template-columns: 1fr 400px; gap: 24px;">
  <!-- Assignment Form -->
  <div class="page-content">
    <div class="page-header">
      <h1><i class="fas fa-exchange-alt"></i> Inventory Assignment Tool</h1>
      <p>Assign inventory devices to agents</p>
    </div>

    <form>
      <div class="form-group">
        <label class="form-label">Select Agent</label>
        <select class="form-control">
          <option>-- Select Agent --</option>
          <option>John Smith (ID: AGT-001)</option>
          <option>Sarah Johnson (ID: AGT-002)</option>
          <option>Mike Davis (ID: AGT-003)</option>
          <option>Emily Brown (ID: AGT-004)</option>
          <option>David Wilson (ID: AGT-005)</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Device Type</label>
        <select class="form-control">
          <option>-- Select Device Type --</option>
          <option>Smartphone</option>
          <option>Tablet</option>
          <option>Hotspot</option>
          <option>Accessory Kit</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Quantity</label>
        <input type="number" class="form-control" placeholder="Enter quantity" min="1">
      </div>

      <div class="form-group">
        <label class="form-label">Store/Location</label>
        <select class="form-control">
          <option>-- Select Store --</option>
          <option>Store #101 - Downtown</option>
          <option>Store #102 - Mall Location</option>
          <option>Store #103 - Airport</option>
          <option>Store #104 - Suburban</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Notes (Optional)</label>
        <textarea class="form-control" rows="4" placeholder="Add any additional notes..."></textarea>
      </div>

      <button type="submit" class="btn btn-primary" style="width: 100%;">
        <i class="fas fa-check"></i> Assign Inventory
      </button>
    </form>
  </div>

  <!-- Activity Log -->
  <div class="page-content">
    <div class="page-header">
      <h1 style="font-size: 18px;"><i class="fas fa-history"></i> Recent Assignments</h1>
    </div>
    <div style="max-height: 600px; overflow-y: auto;">
      <div style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
        <div style="font-size: 13px; font-weight: 600; color: #1f2937; margin-bottom: 4px;">John Smith</div>
        <div style="font-size: 12px; color: #6b7280; margin-bottom: 4px;">5x Smartphone → Store #101</div>
        <div style="font-size: 11px; color: #9ca3af;">2 minutes ago</div>
      </div>
      <div style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
        <div style="font-size: 13px; font-weight: 600; color: #1f2937; margin-bottom: 4px;">Sarah Johnson</div>
        <div style="font-size: 12px; color: #6b7280; margin-bottom: 4px;">3x Tablet → Store #102</div>
        <div style="font-size: 11px; color: #9ca3af;">15 minutes ago</div>
      </div>
      <div style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
        <div style="font-size: 13px; font-weight: 600; color: #1f2937; margin-bottom: 4px;">Mike Davis</div>
        <div style="font-size: 12px; color: #6b7280; margin-bottom: 4px;">10x Hotspot → Store #103</div>
        <div style="font-size: 11px; color: #9ca3af;">1 hour ago</div>
      </div>
      <div style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
        <div style="font-size: 13px; font-weight: 600; color: #1f2937; margin-bottom: 4px;">Emily Brown</div>
        <div style="font-size: 12px; color: #6b7280; margin-bottom: 4px;">2x Smartphone → Store #104</div>
        <div style="font-size: 11px; color: #9ca3af;">2 hours ago</div>
      </div>
      <div style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
        <div style="font-size: 13px; font-weight: 600; color: #1f2937; margin-bottom: 4px;">David Wilson</div>
        <div style="font-size: 12px; color: #6b7280; margin-bottom: 4px;">7x Tablet → Store #101</div>
        <div style="font-size: 11px; color: #9ca3af;">3 hours ago</div>
      </div>
    </div>
  </div>
</div>

