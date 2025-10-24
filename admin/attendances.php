<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

    <!-- Attendance Section -->
    <section id="attendance-section" class="content-section">
        <div class="section-header">
            <h2>Attendance Management</h2>
            <div class="header-actions">
                <button class="btn btn-secondary" id="exportAttendanceBtn">
                    <span>📊</span>
                    Export Report
                </button>
                <button class="btn btn-primary" id="markAttendanceBtn">
                    <span>✅</span>
                    Mark Attendance
                </button>
            </div>
        </div>
        
         <!-- Enhanced attendance navigation tabs  -->
        <div class="attendance-tabs">
            <button class="tab-btn active" data-tab="overview">Overview</button>
            <a href="attendances_report.php" class="tab-btn" data-tab="analytics">Analytics & Reports</a>
            <a href="attendances_weekly.php" class="tab-btn" data-tab="trends">Weekly Trends</a>
            <a href="attendances_department.php" class="tab-btn" data-tab="departments">Department Overview</a>
        </div>
        
        <!-- Overview Tab Content  -->
        <div class="tab-content active" id="overview-tab">
                Quick Stats 
            <div class="attendance-stats">
                <div class="stat-card">
                    <div class="stat-icon">👥</div>
                    <div class="stat-content">
                        <h3>Present Today</h3>
                        <p class="stat-number" id="presentToday">142</p>
                        <span class="stat-change">91% attendance</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">🏠</div>
                    <div class="stat-content">
                        <h3>Remote Workers</h3>
                        <p class="stat-number" id="remoteToday">28</p>
                        <span class="stat-change">18% of workforce</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">⏰</div>
                    <div class="stat-content">
                        <h3>Late Arrivals</h3>
                        <p class="stat-number" id="lateToday">5</p>
                        <span class="stat-change negative">3% of present</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">🚫</div>
                    <div class="stat-content">
                        <h3>Absent Today</h3>
                        <p class="stat-number" id="absentToday">14</p>
                        <span class="stat-change">9% of workforce</span>
                    </div>
                </div>
            </div>
            
                <!-- Attendance Filters  -->
            <div class="attendance-filters">
                <input type="text" placeholder="Search employees..." class="search-input" id="attendanceSearch">
                <select class="filter-select" id="attendanceStatusFilter">
                    <option value="">All Status</option>
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                    <option value="late">Late</option>
                    <option value="remote">Remote</option>
                </select>
                <select class="filter-select" id="attendanceDepartmentFilter">
                    <option value="">All Departments</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">Information Technology</option>
                    <option value="finance">Finance</option>
                    <option value="marketing">Marketing</option>
                    <option value="sales">Sales</option>
                    <option value="operations">Operations</option>
                </select>
                <input type="date" class="date-input" id="attendanceDate" value="">
            </div>
            
                <!-- Attendance Table  -->
            <div class="attendance-table-container">
                <div class="attendance-table">
                    <div class="table-header">
                        <span>Employee</span>
                        <span>Department</span>
                        <span>Check In</span>
                        <span>Check Out</span>
                        <span>Hours</span>
                        <span>Status</span>
                        <span>Actions</span>
                    </div>
                    <div class="table-body" id="attendanceTableBody">
                            Attendance records will be populated by JavaScript 
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>