<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
   
    <!-- Leaves Section -->
    <section id="leaves-section" class="content-section">
        <div class="section-header">
            <h2>Leave Management</h2>
        </div>
        <div class="leave-requests">
            <div class="leave-card">
                <div class="leave-header">
                    <div class="employee-info">
                        <span class="employee-name">John Doe</span>
                        <span class="leave-type">Annual Leave</span>
                    </div>
                    <span class="leave-status pending">Pending</span>
                </div>
                <div class="leave-details">
                    <span>From: March 15, 2024</span>
                    <span>To: March 20, 2024</span>
                    <span>Duration: 5 days</span>
                </div>
                    <!-- Added approve and reject buttons for leave management  -->
                <div class="leave-actions">
                    <button class="btn btn-approve" onclick="approveLeave(this, 'approved')">
                        <span>✓</span> Approve
                    </button>
                    <button class="btn btn-reject" onclick="approveLeave(this, 'rejected')">
                        <span>✗</span> Reject
                    </button>
                </div>
            </div>
            <div class="leave-card">
                <div class="leave-header">
                    <div class="employee-info">
                        <span class="employee-name">Sarah Johnson</span>
                        <span class="leave-type">Sick Leave</span>
                    </div>
                    <span class="leave-status approved">Approved</span>
                </div>
                <div class="leave-details">
                    <span>From: March 10, 2024</span>
                    <span>To: March 12, 2024</span>
                    <span>Duration: 2 days</span>
                </div>
                    <!-- Added approve and reject buttons for leave management  -->
                <div class="leave-actions">
                    <button class="btn btn-approve" onclick="approveLeave(this, 'approved')">
                        <span>✓</span> Approve
                    </button>
                    <button class="btn btn-reject" onclick="approveLeave(this, 'rejected')">
                        <span>✗</span> Reject
                    </button>
                </div>
            </div>
        </div>
                
        <!-- New Filter Bar -->
        <div class="leave-filters">
            <select id="leaveMonthFilter" class="filter-select">
                <option value="">All Months</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>

            <input type="number" id="leaveDayFilter" class="filter-select" placeholder="Day (1-31)" min="1" max="31">
            <input type="number" id="leaveYearFilter" class="filter-select" placeholder="Year" min="2000" max="2100">

            <select id="leaveDepartmentFilter" class="filter-select">
                <option value="">All Departments</option>
                <option value="hr">Human Resources</option>
                <option value="it">Information Technology</option>
                <option value="finance">Finance</option>
                <option value="marketing">Marketing</option>
                <option value="sales">Sales</option>
            </select>

            <button id="filterLeaveBtn" class="btn btn-primary">Filter</button>
        </div>

        <!-- Leave History Table -->
        <div class="leave-history">
            <h3>Leave History</h3>
            <div class="leave-table">
                <div class="table-header">
                    <span>Employee</span>
                    <span>Department</span>
                    <span>Type</span>
                    <span>From</span>
                    <span>To</span>
                    <span>Status</span>
                </div>
                <div id="leaveHistoryBody" class="table-body">
                <!-- Populated via JS -->
                </div>
            </div>
        </div>

    </section>

    </main>
</div>
<?php require_once('layouts/footer.php') ?>