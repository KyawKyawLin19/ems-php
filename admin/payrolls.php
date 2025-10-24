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
            <button class="tab-btn active" data-tab="overview">
                <span>📊</span>
                Overview
            </button>
            <a href="payrolls_employee.php" class="tab-btn" data-tab="employee-payroll">
                <span>👤</span>
                Employee Payroll
            </a>
            <a href="payrolls_department.php" class="tab-btn" data-tab="department-payroll">
                <span>🏢</span>
                Department Payroll
            </a>
            <a href="payrolls_building.php" class="tab-btn" data-tab="building-reports">
                <span>🏗️</span>
                Building Reports
            </a>
        </div>

            <!-- Overview Tab (existing content)  -->
        <div class="tab-content active" id="overview-tab">
                Payroll Stats 
            <div class="payroll-stats">
                <div class="stat-card">
                    <div class="stat-icon">💰</div>
                    <div class="stat-content">
                        <h3>Total Payroll</h3>
                        <p class="stat-number">$485,600</p>
                        <span class="stat-change">This month</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">👥</div>
                    <div class="stat-content">
                        <h3>Employees Paid</h3>
                        <p class="stat-number">142</p>
                        <span class="stat-change">91% processed</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">⏰</div>
                    <div class="stat-content">
                        <h3>Pending Payroll</h3>
                        <p class="stat-number">14</p>
                        <span class="stat-change negative">9% remaining</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">📋</div>
                    <div class="stat-content">
                        <h3>Avg Salary</h3>
                        <p class="stat-number">$3,420</p>
                        <span class="stat-change positive">+5% from last month</span>
                    </div>
                </div>
            </div>
            
                <!-- Payroll Filters  -->
            <div class="payroll-filters">
                <input type="text" placeholder="Search employees..." class="search-input" id="payrollSearch">
                <select class="filter-select" id="payrollDepartmentFilter">
                    <option value="">All Departments</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">Information Technology</option>
                    <option value="finance">Finance</option>
                    <option value="marketing">Marketing</option>
                    <option value="sales">Sales</option>
                    <option value="operations">Operations</option>
                </select>
                <select class="filter-select" id="payrollStatusFilter">
                    <option value="">All Status</option>
                    <option value="processed">Processed</option>
                    <option value="pending">Pending</option>
                    <option value="hold">On Hold</option>
                </select>
                <select class="filter-select" id="payrollMonthFilter">
                    <option value="">Select Month</option>
                    <option value="2024-03">March 2024</option>
                    <option value="2024-02">February 2024</option>
                    <option value="2024-01">January 2024</option>
                </select>
            </div>
            
                Payroll Table 
            <div class="payroll-table-container">
                <div class="payroll-table">
                    <div class="table-header">
                        <span>Employee</span>
                        <span>Department</span>
                        <span>Basic Salary</span>
                        <span>Allowances</span>
                        <span>Deductions</span>
                        <span>Net Salary</span>
                        <span>Status</span>
                        <span>Actions</span>
                    </div>
                    <div class="table-body" id="payrollTableBody">
                            Payroll records will be populated by JavaScript 
                    </div>
                </div>
            </div>
            
                Payroll Summary 
            <div class="payroll-summary">
                <div class="summary-card">
                    <h3>Payroll Summary</h3>
                    <div class="summary-item">
                        <span>Total Basic Salary:</span>
                        <span class="amount">$420,000</span>
                    </div>
                    <div class="summary-item">
                        <span>Total Allowances:</span>
                        <span class="amount positive">+$85,600</span>
                    </div>
                    <div class="summary-item">
                        <span>Total Deductions:</span>
                        <span class="amount negative">-$20,000</span>
                    </div>
                    <div class="summary-item total">
                        <span>Net Payroll:</span>
                        <span class="amount">$485,600</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>