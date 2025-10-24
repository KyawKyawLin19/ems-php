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
            <button class="tab-btn active" data-tab="employee-payroll">
                <span>👤</span>
                Employee Payroll
            </button>
            <a href="payrolls_department.php" class="tab-btn" data-tab="department-payroll">
                <span>🏢</span>
                Department Payroll
            </a>
            <a href="payrolls_building.php" class="tab-btn" data-tab="building-reports">
                <span>🏗️</span>
                Building Reports
            </a>
        </div>

        <div class="tab-content active" id="employee-payroll-tab">
            <div class="employee-payroll-header">
                <h3>Individual Employee Payroll</h3>
                <div class="payroll-actions">
                    <button class="btn btn-secondary" id="bulkPayrollBtn">
                        <span>📋</span>
                        Bulk Process
                    </button>
                    <button class="btn btn-primary" id="generatePayslipBtn">
                        <span>📄</span>
                        Generate Payslip
                    </button>
                </div>
            </div>

            <div class="employee-payroll-filters">
                <input type="text" placeholder="Search employee..." class="search-input" id="employeePayrollSearch">
                <select class="filter-select" id="employeePayrollDept">
                    <option value="">All Departments</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">Information Technology</option>
                    <option value="finance">Finance</option>
                    <option value="marketing">Marketing</option>
                    <option value="sales">Sales</option>
                    <option value="operations">Operations</option>
                </select>
                <select class="filter-select" id="employeePayrollPeriod">
                    <option value="current">Current Month</option>
                    <option value="2024-03">March 2024</option>
                    <option value="2024-02">February 2024</option>
                    <option value="2024-01">January 2024</option>
                </select>
            </div>

            <div class="employee-payroll-grid" id="employeePayrollGrid">
                    Employee payroll cards will be populated by JavaScript 
            </div>

            <div class="employee-payroll-analytics">
                <div class="analytics-card">
                    <h4>Salary Distribution</h4>
                    <canvas id="salaryDistributionChart" width="400" height="200"></canvas>
                </div>
                <div class="analytics-card">
                    <h4>Payroll Trends</h4>
                    <canvas id="payrollTrendsChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>