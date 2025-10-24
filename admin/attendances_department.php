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
            <a href="attendances_report.php" class="tab-btn" data-tab="analytics">Analytics & Reports</a>
            <a href="attendances_weekly.php" class="tab-btn " data-tab="trends">Weekly Trends</a>
            <button class="tab-btn active" data-tab="departments">Department Overview</button>
        </div>

        <div class="tab-content active" id="departments-tab">
            <div class="department-overview">
                <div class="department-stats">
                    <div class="dept-stat-card best">
                        <div class="dept-icon">🏆</div>
                        <div class="dept-content">
                            <h4>Best Performing</h4>
                            <p class="dept-name">Information Technology</p>
                            <p class="dept-rate">96.2% attendance</p>
                        </div>
                    </div>
                    <div class="dept-stat-card needs-attention">
                        <div class="dept-icon">⚠️</div>
                        <div class="dept-content">
                            <h4>Needs Attention</h4>
                            <p class="dept-name">Sales</p>
                            <p class="dept-rate">82.1% attendance</p>
                        </div>
                    </div>
                    <div class="dept-stat-card average">
                        <div class="dept-icon">📊</div>
                        <div class="dept-content">
                            <h4>Company Average</h4>
                            <p class="dept-name">All Departments</p>
                            <p class="dept-rate">89.4% attendance</p>
                        </div>
                    </div>
                </div>
                
                <div class="department-comparison">
                    <h3>📈 Department Attendance Comparison</h3>
                    <div class="dept-comparison-chart">
                        <div class="dept-row">
                            <span class="dept-label">Information Technology</span>
                            <div class="dept-bar-container">
                                <div class="dept-bar" style="width: 96.2%; background: #10b981;"></div>
                                <span class="dept-percentage">96.2%</span>
                            </div>
                        </div>
                        <div class="dept-row">
                            <span class="dept-label">Finance</span>
                            <div class="dept-bar-container">
                                <div class="dept-bar" style="width: 93.8%; background: #10b981;"></div>
                                <span class="dept-percentage">93.8%</span>
                            </div>
                        </div>
                        <div class="dept-row">
                            <span class="dept-label">Human Resources</span>
                            <div class="dept-bar-container">
                                <div class="dept-bar" style="width: 91.5%; background: #10b981;"></div>
                                <span class="dept-percentage">91.5%</span>
                            </div>
                        </div>
                        <div class="dept-row">
                            <span class="dept-label">Operations</span>
                            <div class="dept-bar-container">
                                <div class="dept-bar" style="width: 88.7%; background: #f59e0b;"></div>
                                <span class="dept-percentage">88.7%</span>
                            </div>
                        </div>
                        <div class="dept-row">
                            <span class="dept-label">Marketing</span>
                            <div class="dept-bar-container">
                                <div class="dept-bar" style="width: 85.3%; background: #f59e0b;"></div>
                                <span class="dept-percentage">85.3%</span>
                            </div>
                        </div>
                        <div class="dept-row">
                            <span class="dept-label">Sales</span>
                            <div class="dept-bar-container">
                                <div class="dept-bar" style="width: 82.1%; background: #ef4444;"></div>
                                <span class="dept-percentage">82.1%</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="department-details">
                    <h3>🏢 Department Details</h3>
                    <div class="dept-details-grid">
                        <div class="dept-detail-card">
                            <div class="dept-detail-header">
                                <h4>Information Technology</h4>
                                <span class="dept-trend positive">+2.3%</span>
                            </div>
                            <div class="dept-metrics">
                                <div class="metric">
                                    <span class="metric-label">Total Employees</span>
                                    <span class="metric-value">28</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Present Today</span>
                                    <span class="metric-value">27</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Remote Workers</span>
                                    <span class="metric-value">8</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Late Arrivals</span>
                                    <span class="metric-value">0</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dept-detail-card">
                            <div class="dept-detail-header">
                                <h4>Sales</h4>
                                <span class="dept-trend negative">-1.8%</span>
                            </div>
                            <div class="dept-metrics">
                                <div class="metric">
                                    <span class="metric-label">Total Employees</span>
                                    <span class="metric-value">35</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Present Today</span>
                                    <span class="metric-value">29</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Remote Workers</span>
                                    <span class="metric-value">12</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Late Arrivals</span>
                                    <span class="metric-value">3</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dept-detail-card">
                            <div class="dept-detail-header">
                                <h4>Marketing</h4>
                                <span class="dept-trend">+0.5%</span>
                            </div>
                            <div class="dept-metrics">
                                <div class="metric">
                                    <span class="metric-label">Total Employees</span>
                                    <span class="metric-value">22</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Present Today</span>
                                    <span class="metric-value">19</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Remote Workers</span>
                                    <span class="metric-value">5</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-label">Late Arrivals</span>
                                    <span class="metric-value">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>