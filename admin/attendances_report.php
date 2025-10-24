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
            <a href="attendances.php" class="tab-btn" data-tab="overview">Overview</a>
            <button class="tab-btn active" data-tab="analytics">Analytics & Reports</button>
            <a href="attendances_weekly.php" class="tab-btn" data-tab="trends">Weekly Trends</a>
            <a href="attendances_department.php" class="tab-btn" data-tab="departments">Department Overview</a>
        </div>

        <div class="tab-content active" id="analytics-tab">
            <div class="analytics-overview">
                <div class="analytics-card">
                    <div class="analytics-header">
                        <h3>📈 Attendance Analytics</h3>
                        <select class="period-select">
                            <option value="week">This Week</option>
                            <option value="month">This Month</option>
                            <option value="quarter">This Quarter</option>
                            <option value="year">This Year</option>
                        </select>
                    </div>
                    <div class="analytics-metrics">
                        <div class="metric-item">
                            <span class="metric-label">Average Attendance</span>
                            <span class="metric-value">89.2%</span>
                            <span class="metric-trend positive">+2.1%</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">On-Time Rate</span>
                            <span class="metric-value">94.7%</span>
                            <span class="metric-trend positive">+1.3%</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Remote Work Rate</span>
                            <span class="metric-value">18.5%</span>
                            <span class="metric-trend">-0.8%</span>
                        </div>
                    </div>
                </div>
                
                <div class="analytics-card">
                    <div class="analytics-header">
                        <h3>📊 Attendance Distribution</h3>
                    </div>
                    <div class="chart-container" id="attendanceDistributionChart">
                        <div class="chart-placeholder">
                            <div class="chart-bars">
                                <div class="chart-bar" style="height: 85%; background: #10b981;">
                                    <span class="bar-label">Present<br>85%</span>
                                </div>
                                <div class="chart-bar" style="height: 12%; background: #f59e0b;">
                                    <span class="bar-label">Remote<br>12%</span>
                                </div>
                                <div class="chart-bar" style="height: 8%; background: #ef4444;">
                                    <span class="bar-label">Absent<br>8%</span>
                                </div>
                                <div class="chart-bar" style="height: 5%; background: #8b5cf6;">
                                    <span class="bar-label">Late<br>5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="reports-section">
                <h3>📋 Generate Reports</h3>
                <div class="reports-grid">
                    <div class="report-card">
                        <div class="report-header">
                            <h3>Daily Attendance Report</h3>
                            <button class="report-generate-btn" data-report="daily">Generate</button>
                        </div>
                        <p>Comprehensive daily attendance summary 
                            with check-in/out times</p>
                        <div class="report-meta">
                            <span>Last generated: Today</span>
                            <span class="report-status">91% attendance</span>
                        </div>
                    </div>
                    
                    <div class="report-card">
                        <div class="report-header">
                            <h3>Monthly Attendance Report</h3>
                            <button class="report-generate-btn" data-report="monthly">Generate</button>
                        </div>
                        <p>Monthly attendance patterns, trends, and department comparisons</p>
                        <div class="report-meta">
                            <span>Last generated: Yesterday</span>
                            <span class="report-status">March 2024</span>
                        </div>
                    </div>
                    
                    <div class="report-card">
                        <div class="report-header">
                            <h3>Attendance Analytics Report</h3>
                            <button class="report-generate-btn" data-report="analytics">Generate</button>
                        </div>
                        <p>Advanced analytics with insights and recommendations</p>
                        <div class="report-meta">
                            <span>Last generated: 2 days ago</span>
                            <span class="report-status">Insights available</span>
                        </div>
                    </div>
                    
                    <div class="report-card">
                        <div class="report-header">
                            <h3>Department Comparison</h3>
                            <button class="report-generate-btn" data-report="department">Generate</button>
                        </div>
                        <p>Cross-department attendance analysis and benchmarking</p>
                        <div class="report-meta">
                            <span>Last generated: 3 days ago</span>
                            <span class="report-status">6 departments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>