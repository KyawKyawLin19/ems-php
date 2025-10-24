<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

    <section id="payroll-section" class="content-section">
        <div class="section-header">
            <h2>Payroll Management</h2>
            <div class="header-actions">
                <button class="btn btn-secondary" id="exportPayrollBtn">
                    <span>📊</span>
                    Export Report
                </button>
                <button class="btn btn-primary" id="processPayrollBtn">
                    <span>💰</span>
                    Process Payroll
                </button>
            </div>
        </div>
        
        <div class="payroll-tabs">
            <a href="payrolls.php" class="tab-btn" data-tab="overview">
                <span>📊</span>
                Overview
            </a>
            <a href="payrolls_employee.php" class="tab-btn" data-tab="employee-payroll">
                <span>👤</span>
                Employee Payroll
            </a>
            <button class="tab-btn active" data-tab="department-payroll">
                <span>🏢</span>
                Department Payroll
            </button>
            <a href="payrolls_building.php" class="tab-btn" data-tab="building-reports">
                <span>🏗️</span>
                Building Reports
            </a>
        </div>

        <div class="tab-content active" id="department-payroll-tab">
            <div class="department-payroll-header">
                <h3>Department-wise Payroll Analysis</h3>
                <div class="payroll-actions">
                    <button class="btn btn-secondary" id="compareDeptBtn">
                        <span>📊</span>
                        Compare Departments
                    </button>
                    <button class="btn btn-primary" id="exportDeptPayrollBtn">
                        <span>📤</span>
                        Export Report
                    </button>
                </div>
            </div>

            <div class="department-payroll-stats">
                <div class="dept-stat-card">
                    <div class="dept-icon">🏢</div>
                    <div class="dept-info">
                        <h4>Total Departments</h4>
                        <p class="dept-number">6</p>
                        <span class="dept-change">Active departments</span>
                    </div>
                </div>
                <div class="dept-stat-card">
                    <div class="dept-icon">💰</div>
                    <div class="dept-info">
                        <h4>Highest Payroll</h4>
                        <p class="dept-number">$125,400</p>
                        <span class="dept-change">IT Department</span>
                    </div>
                </div>
                <div class="dept-stat-card">
                    <div class="dept-icon">📈</div>
                    <div class="dept-info">
                        <h4>Average per Dept</h4>
                        <p class="dept-number">$80,933</p>
                        <span class="dept-change">Monthly average</span>
                    </div>
                </div>
                <div class="dept-stat-card">
                    <div class="dept-icon">⚖️</div>
                    <div class="dept-info">
                        <h4>Budget Variance</h4>
                        <p class="dept-number">+2.3%</p>
                        <span class="dept-change positive">Within budget</span>
                    </div>
                </div>
            </div>

            <div class="department-payroll-grid">
                <div class="dept-payroll-card">
                    <div class="dept-card-header">
                        <h4>Human Resources</h4>
                        <span class="dept-badge hr">HR</span>
                    </div>
                    <div class="dept-payroll-details">
                        <div class="dept-detail">
                            <span>Employees:</span>
                            <span>12</span>
                        </div>
                        <div class="dept-detail">
                            <span>Total Payroll:</span>
                            <span class="amount">$78,400</span>
                        </div>
                        <div class="dept-detail">
                            <span>Average Salary:</span>
                            <span>$6,533</span>
                        </div>
                        <div class="dept-detail">
                            <span>Budget Usage:</span>
                            <span class="positive">92%</span>
                        </div>
                    </div>
                    <div class="dept-chart-container">
                        <canvas id="hrPayrollChart" width="300" height="150"></canvas>
                    </div>
                </div>

                <div class="dept-payroll-card">
                    <div class="dept-card-header">
                        <h4>Information Technology</h4>
                        <span class="dept-badge it">IT</span>
                    </div>
                    <div class="dept-payroll-details">
                        <div class="dept-detail">
                            <span>Employees:</span>
                            <span>18</span>
                        </div>
                        <div class="dept-detail">
                            <span>Total Payroll:</span>
                            <span class="amount">$125,400</span>
                        </div>
                        <div class="dept-detail">
                            <span>Average Salary:</span>
                            <span>$6,967</span>
                        </div>
                        <div class="dept-detail">
                            <span>Budget Usage:</span>
                            <span class="positive">88%</span>
                        </div>
                    </div>
                    <div class="dept-chart-container">
                        <canvas id="itPayrollChart" width="300" height="150"></canvas>
                    </div>
                </div>

                <div class="dept-payroll-card">
                    <div class="dept-card-header">
                        <h4>Marketing</h4>
                        <span class="dept-badge marketing">MKT</span>
                    </div>
                    <div class="dept-payroll-details">
                        <div class="dept-detail">
                            <span>Employees:</span>
                            <span>15</span>
                        </div>
                        <div class="dept-detail">
                            <span>Total Payroll:</span>
                            <span class="amount">$89,200</span>
                        </div>
                        <div class="dept-detail">
                            <span>Average Salary:</span>
                            <span>$5,947</span>
                        </div>
                        <div class="dept-detail">
                            <span>Budget Usage:</span>
                            <span class="warning">96%</span>
                        </div>
                    </div>
                    <div class="dept-chart-container">
                        <canvas id="marketingPayrollChart" width="300" height="150"></canvas>
                    </div>
                </div>

                <div class="dept-payroll-card">
                    <div class="dept-card-header">
                        <h4>Sales</h4>
                        <span class="dept-badge sales">SALES</span>
                    </div>
                    <div class="dept-payroll-details">
                        <div class="dept-detail">
                            <span>Employees:</span>
                            <span>22</span>
                        </div>
                        <div class="dept-detail">
                            <span>Total Payroll:</span>
                            <span class="amount">$98,600</span>
                        </div>
                        <div class="dept-detail">
                            <span>Average Salary:</span>
                            <span>$4,482</span>
                        </div>
                        <div class="dept-detail">
                            <span>Budget Usage:</span>
                            <span class="positive">85%</span>
                        </div>
                    </div>
                    <div class="dept-chart-container">
                        <canvas id="salesPayrollChart" width="300" height="150"></canvas>
                    </div>
                </div>

                <div class="dept-payroll-card">
                    <div class="dept-card-header">
                        <h4>Finance</h4>
                        <span class="dept-badge finance">FIN</span>
                    </div>
                    <div class="dept-payroll-details">
                        <div class="dept-detail">
                            <span>Employees:</span>
                            <span>8</span>
                        </div>
                        <div class="dept-detail">
                            <span>Total Payroll:</span>
                            <span class="amount">$64,800</span>
                        </div>
                        <div class="dept-detail">
                            <span>Average Salary:</span>
                            <span>$8,100</span>
                        </div>
                        <div class="dept-detail">
                            <span>Budget Usage:</span>
                            <span class="positive">90%</span>
                        </div>
                    </div>
                    <div class="dept-chart-container">
                        <canvas id="financePayrollChart" width="300" height="150"></canvas>
                    </div>
                </div>

                <div class="dept-payroll-card">
                    <div class="dept-card-header">
                        <h4>Operations</h4>
                        <span class="dept-badge operations">OPS</span>
                    </div>
                    <div class="dept-payroll-details">
                        <div class="dept-detail">
                            <span>Employees:</span>
                            <span>25</span>
                        </div>
                        <div class="dept-detail">
                            <span>Total Payroll:</span>
                            <span class="amount">$87,500</span>
                        </div>
                        <div class="dept-detail">
                            <span>Average Salary:</span>
                            <span>$3,500</span>
                        </div>
                        <div class="dept-detail">
                            <span>Budget Usage:</span>
                            <span class="positive">82%</span>
                        </div>
                    </div>
                    <div class="dept-chart-container">
                        <canvas id="operationsPayrollChart" width="300" height="150"></canvas>
                    </div>
                </div>
            </div>

            <div class="department-comparison">
                <div class="comparison-header">
                    <h4>Department Comparison</h4>
                    <div class="comparison-controls">
                        <select id="comparisonMetric">
                            <option value="total">Total Payroll</option>
                            <option value="average">Average Salary</option>
                            <option value="budget">Budget Usage</option>
                        </select>
                    </div>
                </div>
                <div class="comparison-chart">
                    <canvas id="departmentComparisonChart" width="800" height="300"></canvas>
                </div>
            </div>
        </div>

    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>