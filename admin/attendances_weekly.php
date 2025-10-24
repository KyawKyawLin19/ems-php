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
            <button class="tab-btn active" data-tab="trends">Weekly Trends</button>
            <a href="attendances_department.php" class="tab-btn" data-tab="departments">Department Overview</a>
        </div>

        <div class="tab-content active" id="trends-tab">
            <div class="trends-overview">
                <div class="trend-card">
                    <div class="trend-header">
                        <h3>📅 Weekly Attendance Trend</h3>
                        <div class="trend-controls">
                            <button class="trend-nav" id="prevWeek">‹</button>
                            <span class="current-week">March 18-24, 2024</span>
                            <button class="trend-nav" id="nextWeek">›</button>
                        </div>
                    </div>
                    <div class="weekly-chart-container">
                        <div class="weekly-chart">
                            <div class="chart-days">
                                <div class="day-column">
                                    <div class="day-label">Mon</div>
                                    <div class="day-bar" style="height: 92%;">
                                        <span class="day-value">92%</span>
                                    </div>
                                    <div class="day-count">147/160</div>
                                </div>
                                <div class="day-column">
                                    <div class="day-label">Tue</div>
                                    <div class="day-bar" style="height: 89%;">
                                        <span class="day-value">89%</span>
                                    </div>
                                    <div class="day-count">142/160</div>
                                </div>
                                <div class="day-column">
                                    <div class="day-label">Wed</div>
                                    <div class="day-bar" style="height: 94%;">
                                        <span class="day-value">94%</span>
                                    </div>
                                    <div class="day-count">150/160</div>
                                </div>
                                <div class="day-column">
                                    <div class="day-label">Thu</div>
                                    <div class="day-bar" style="height: 87%;">
                                        <span class="day-value">87%</span>
                                    </div>
                                    <div class="day-count">139/160</div>
                                </div>
                                <div class="day-column">
                                    <div class="day-label">Fri</div>
                                    <div class="day-bar" style="height: 85%;">
                                        <span class="day-value">85%</span>
                                    </div>
                                    <div class="day-count">136/160</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="weekly-insights">
                        <div class="insight-item">
                            <span class="insight-icon">📈</span>
                            <span class="insight-text">Wednesday shows highest attendance (94%)</span>
                        </div>
                        <div class="insight-item">
                            <span class="insight-icon">📉</span>
                            <span class="insight-text">Friday attendance typically drops by 7%</span>
                        </div>
                        <div class="insight-item">
                            <span class="insight-icon">⭐</span>
                            <span class="insight-text">Weekly average: 89.4% (+2.1% vs last week)</span>
                        </div>
                    </div>
                </div>
                
                <div class="trend-card">
                    <div class="trend-header">
                        <h3>🕐 Peak Hours Analysis</h3>
                    </div>
                    <div class="peak-hours-chart">
                        <div class="hour-bars">
                            <div class="hour-bar" style="height: 20%;">
                                <span class="hour-label">8AM</span>
                                <span class="hour-value">20%</span>
                            </div>
                            <div class="hour-bar" style="height: 85%;">
                                <span class="hour-label">9AM</span>
                                <span class="hour-value">85%</span>
                            </div>
                            <div class="hour-bar" style="height: 95%;">
                                <span class="hour-label">10AM</span>
                                <span class="hour-value">95%</span>
                            </div>
                            <div class="hour-bar" style="height: 92%;">
                                <span class="hour-label">11AM</span>
                                <span class="hour-value">92%</span>
                            </div>
                            <div class="hour-bar" style="height: 75%;">
                                <span class="hour-label">12PM</span>
                                <span class="hour-value">75%</span>
                            </div>
                            <div class="hour-bar" style="height: 88%;">
                                <span class="hour-label">1PM</span>
                                <span class="hour-value">88%</span>
                            </div>
                            <div class="hour-bar" style="height: 90%;">
                                <span class="hour-label">2PM</span>
                                <span class="hour-value">90%</span>
                            </div>
                            <div class="hour-bar" style="height: 87%;">
                                <span class="hour-label">3PM</span>
                                <span class="hour-value">87%</span>
                            </div>
                            <div class="hour-bar" style="height: 82%;">
                                <span class="hour-label">4PM</span>
                                <span class="hour-value">82%</span>
                            </div>
                            <div class="hour-bar" style="height: 78%;">
                                <span class="hour-label">5PM</span>
                                <span class="hour-value">78%</span>
                            </div>
                        </div>
                    </div>
                    <div class="peak-insights">
                        <p><strong>Peak Hours:</strong> 10AM - 11AM (95% presence)</p>
                        <p><strong>Low Hours:</strong> 8AM - 9AM (20% early arrivals)</p>
                    </div>
                </div>
            </div>
        </div>

        </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>