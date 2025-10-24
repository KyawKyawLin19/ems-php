<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

    <section id="reports-section" class="content-section">
            <!-- Replaced placeholder with comprehensive reports section  -->
        <div class="section-header">
            <h2>Reports & Analytics</h2>
            <div class="header-actions">
                <button class="btn btn-secondary" id="scheduleReportBtn">
                    <span>📅</span>
                    Schedule Report
                </button>
                <button class="btn btn-primary" id="generateReportBtn">
                    <span>📊</span>
                    Generate Report
                </button>
            </div>
        </div>
        
            <!-- Report Categories  -->
        <div class="report-categories">
            <div class="category-card active" data-category="overview">
                <div class="category-icon">📊</div>
                <h3>Overview Reports</h3>
                <p>General analytics and summaries</p>
            </div>
            <div class="category-card" data-category="employee">
                <div class="category-icon">👥</div>
                <h3>Employee Reports</h3>
                <p>Staff performance and details</p>
            </div>
            <div class="category-card" data-category="attendance">
                <div class="category-icon">📅</div>
                <h3>Attendance Reports</h3>
                <p>Time tracking and presence</p>
            </div>
            <div class="category-card" data-category="payroll">
                <div class="category-icon">💰</div>
                <h3>Payroll Reports</h3>
                <p>Salary and compensation data</p>
            </div>
        </div>
        
            <!-- Report Filters  -->
        <div class="report-filters">
            <select class="filter-select" id="reportDepartmentFilter">
                <option value="">All Departments</option>
                <option value="hr">Human Resources</option>
                <option value="it">Information Technology</option>
                <option value="finance">Finance</option>
                <option value="marketing">Marketing</option>
                <option value="sales">Sales</option>
                <option value="operations">Operations</option>
            </select>
            <select class="filter-select" id="reportPeriodFilter">
                <option value="current-month">Current Month</option>
                <option value="last-month">Last Month</option>
                <option value="current-quarter">Current Quarter</option>
                <option value="last-quarter">Last Quarter</option>
                <option value="current-year">Current Year</option>
                <option value="custom">Custom Range</option>
            </select>
            <div class="date-range" id="customDateRange" style="display: none;">
                <input type="date" id="reportStartDate" class="date-input">
                <span>to</span>
                <input type="date" id="reportEndDate" class="date-input">
            </div>
        </div>
        
            <!-- Overview Reports  -->
        <div class="report-content" id="overview-reports">
            <div class="reports-grid">
                <div class="report-card">
                    <div class="report-header">
                        <h3>Employee Summary</h3>
                        <button class="report-action" data-report="employee-summary">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Comprehensive overview of all employees, departments, and roles</p>
                    <div class="report-stats">
                        <span>Last generated: 2 days ago</span>
                        <span>156 employees</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Department Analysis</h3>
                        <button class="report-action" data-report="department-analysis">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Department-wise breakdown of employees, budgets, and performance</p>
                    <div class="report-stats">
                        <span>Last generated: 1 week ago</span>
                        <span>6 departments</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Monthly Dashboard</h3>
                        <button class="report-action" data-report="monthly-dashboard">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Key metrics and KPIs for the current month</p>
                    <div class="report-stats">
                        <span>Last generated: Yesterday</span>
                        <span>March 2024</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Compliance Report</h3>
                        <button class="report-action" data-report="compliance-report">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Regulatory compliance and audit trail information</p>
                    <div class="report-stats">
                        <span>Last generated: 3 days ago</span>
                        <span>All compliant</span>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Employee Reports  -->
        <div class="report-content" id="employee-reports" style="display: none;">
            <div class="reports-grid">
                <div class="report-card">
                    <div class="report-header">
                        <h3>Employee Directory</h3>
                        <button class="report-action" data-report="employee-directory">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Complete list of employees with contact information</p>
                    <div class="report-stats">
                        <span>Last generated: Today</span>
                        <span>156 employees</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Performance Review</h3>
                        <button class="report-action" data-report="performance-review">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Employee performance ratings and feedback summary</p>
                    <div class="report-stats">
                        <span>Last generated: 1 week ago</span>
                        <span>Q1 2024</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Skills Matrix</h3>
                        <button class="report-action" data-report="skills-matrix">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Employee skills and competency mapping</p>
                    <div class="report-stats">
                        <span>Last generated: 5 days ago</span>
                        <span>45 skills tracked</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Training Report</h3>
                        <button class="report-action" data-report="training-report">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Training completion and certification status</p>
                    <div class="report-stats">
                        <span>Last generated: 3 days ago</span>
                        <span>23 certifications</span>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Attendance Reports  -->
        <div class="report-content" id="attendance-reports" style="display: none;">
            <div class="reports-grid">
                <div class="report-card">
                    <div class="report-header">
                        <h3>Daily Attendance</h3>
                        <button class="report-action" data-report="daily-attendance">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Daily attendance summary with check-in/out times</p>
                    <div class="report-stats">
                        <span>Last generated: Today</span>
                        <span>91% attendance</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Monthly Attendance</h3>
                        <button class="report-action" data-report="monthly-attendance">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Monthly attendance patterns and trends</p>
                    <div class="report-stats">
                        <span>Last generated: Yesterday</span>
                        <span>March 2024</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Overtime Report</h3>
                        <button class="report-action" data-report="overtime-report">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Overtime hours and compensation analysis</p>
                    <div class="report-stats">
                        <span>Last generated: 2 days ago</span>
                        <span>245 OT hours</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Leave Analysis</h3>
                        <button class="report-action" data-report="leave-analysis">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Leave patterns, balances, and utilization</p>
                    <div class="report-stats">
                        <span>Last generated: 4 days ago</span>
                        <span>23 pending requests</span>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Payroll Reports  -->
        <div class="report-content" id="payroll-reports" style="display: none;">
            <div class="reports-grid">
                <div class="report-card">
                    <div class="report-header">
                        <h3>Payroll Summary</h3>
                        <button class="report-action" data-report="payroll-summary">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Monthly payroll totals and breakdowns</p>
                    <div class="report-stats">
                        <span>Last generated: 1 day ago</span>
                        <span>$485,600 total</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Salary Analysis</h3>
                        <button class="report-action" data-report="salary-analysis">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Salary distribution and compensation analysis</p>
                    <div class="report-stats">
                        <span>Last generated: 3 days ago</span>
                        <span>$3,420 avg salary</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Tax Report</h3>
                        <button class="report-action" data-report="tax-report">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Tax deductions and compliance reporting</p>
                    <div class="report-stats">
                        <span>Last generated: 1 week ago</span>
                        <span>$97,120 total tax</span>
                    </div>
                </div>
                
                <div class="report-card">
                    <div class="report-header">
                        <h3>Benefits Report</h3>
                        <button class="report-action" data-report="benefits-report">
                            <span>📄</span>
                            Generate
                        </button>
                    </div>
                    <p>Employee benefits utilization and costs</p>
                    <div class="report-stats">
                        <span>Last generated: 5 days ago</span>
                        <span>$45,200 benefits</span>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Recent Reports  -->
        <div class="recent-reports">
            <h3>Recent Reports</h3>
            <div class="recent-reports-list">
                <div class="recent-report-item">
                    <div class="report-info">
                        <span class="report-name">Monthly Attendance Report</span>
                        <span class="report-date">Generated on March 15, 2024</span>
                    </div>
                    <div class="report-actions">
                        <button class="btn-icon" title="Download">📥</button>
                        <button class="btn-icon" title="View">👁️</button>
                        <button class="btn-icon" title="Share">📤</button>
                    </div>
                </div>
                
                <div class="recent-report-item">
                    <div class="report-info">
                        <span class="report-name">Payroll Summary - March 2024</span>
                        <span class="report-date">Generated on March 14, 2024</span>
                    </div>
                    <div class="report-actions">
                        <button class="btn-icon" title="Download">📥</button>
                        <button class="btn-icon" title="View">👁️</button>
                        <button class="btn-icon" title="Share">📤</button>
                    </div>
                </div>
                
                <div class="recent-report-item">
                    <div class="report-info">
                        <span class="report-name">Employee Directory</span>
                        <span class="report-date">Generated on March 13, 2024</span>
                    </div>
                    <div class="report-actions">
                        <button class="btn-icon" title="Download">📥</button>
                        <button class="btn-icon" title="View">👁️</button>
                        <button class="btn-icon" title="Share">📤</button>
                    </div>
                </div>
                
                <div class="recent-report-item">
                    <div class="report-info">
                        <span class="report-name">Department Analysis Q1</span>
                        <span class="report-date">Generated on March 10, 2024</span>
                    </div>
                    <div class="report-actions">
                        <button class="btn-icon" title="Download">📥</button>
                        <button class="btn-icon" title="View">👁️</button>
                        <button class="btn-icon" title="Share">📤</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>