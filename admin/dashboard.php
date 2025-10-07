<?php require_once('layouts/master.php') ?>
        
        <!-- Overview Section  -->
        <section id="overview-section" class="content-section active">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">👥</div>
                    <div class="stat-content">
                        <h3>Total Employees</h3>
                        <p class="stat-number">156</p>
                        <span class="stat-change positive">+12 this month</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">✅</div>
                    <div class="stat-content">
                        <h3>Present Today</h3>
                        <p class="stat-number">142</p>
                        <span class="stat-change">91% attendance</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">📋</div>
                    <div class="stat-content">
                        <h3>Pending Leaves</h3>
                        <p class="stat-number">7</p>
                        <span class="stat-change">Approved 5</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">📋</div>
                    <div class="stat-content">
                        <h3>Pending Tasks</h3>
                        <p class="stat-number">7</p>
                        <span class="stat-change negative">2 overdue</span>
                    </div>
                </div>
            </div>
            
            <div class="dashboard-grid">
                <div class="dashboard-card">
                    <h3>Recent Activities</h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <span class="activity-icon">👤</span>
                            <div class="activity-content">
                                <p>New employee Sarah Johnson joined Marketing</p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="activity-icon">📅</span>
                            <div class="activity-content">
                                <p>Team meeting scheduled for tomorrow 2 PM</p>
                                <span class="activity-time">4 hours ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="activity-icon">💰</span>
                            <div class="activity-content">
                                <p>Payroll processed for March 2024</p>
                                <span class="activity-time">1 day ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <h3>Quick Actions</h3>
                    <div class="quick-actions">
                        <a href="employee_add.php" class="action-btn">
                            <span>➕</span>
                            Add Employee
                        </a>
                        <button class="action-btn">
                            <span>📊</span>
                            Generate Report
                        </button>
                        <button class="action-btn">
                            <span>📧</span>
                            Send Announcement
                        </button>
                        <button class="action-btn">
                            <span>⏰</span>
                            Schedule Meeting
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>