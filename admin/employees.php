<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
        <!-- Employees Section  -->
        <section id="employees-section" class="content-section active" >
            <div class="section-header">
                <h2>Employee Management</h2>
                <a href="employee_add.php" class="btn btn-primary" id="addEmployeeBtn">
                    <span>➕</span>
                    Add Employee
                </a>
            </div>
            <div class="employee-filters">
                <input type="text" placeholder="Search employees..." class="search-input" id="employeeSearch">
                <select class="filter-select" id="departmentFilter">
                    <option value="">All Departments</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">Information Technology</option>
                    <option value="finance">Finance</option>
                    <option value="marketing">Marketing</option>
                    <option value="sales">Sales</option>
                    <option value="operations">Operations</option>
                </select>
            </div>
            <div class="employee-grid" id="employeeGrid">
                    <!-- Employee cards will be populated by JavaScript  -->
                <div class="employee-card" data-department="it">
                    <div class="employee-header">
                    <div class="employee-avatar">MC</div>
                    <div class="employee-info">
                        <h4>Michael Chen</h4>
                        <p>Software Developer</p>
                    </div>
                    </div>
                    <div class="employee-details">
                    <div class="employee-detail">
                        <span>Department:</span>
                        <span>Information Technology</span>
                    </div>
                    <div class="employee-detail">
                        <span>Email:</span>
                        <span>michael.chen@company.com</span>
                    </div>
                    <div class="employee-detail">
                        <span>Salary:</span>
                        <span>$85,000</span>
                    </div>
                    <div class="employee-detail">
                        <span>Start Date:</span>
                        <span>Aug 20, 2022</span>
                    </div>
                    </div>
                </div>

                <div class="employee-card" data-department="hr">
                    <div class="employee-header">
                    <div class="employee-avatar">ED</div>
                    <div class="employee-info">
                        <h4>Emily Davis</h4>
                        <p>HR Specialist</p>
                    </div>
                    </div>
                    <div class="employee-details">
                    <div class="employee-detail">
                        <span>Department:</span>
                        <span>Human Resources</span>
                    </div>
                    <div class="employee-detail">
                        <span>Email:</span>
                        <span>emily.davis@company.com</span>
                    </div>
                    <div class="employee-detail">
                        <span>Salary:</span>
                        <span>$65,000</span>
                    </div>
                    <div class="employee-detail">
                        <span>Start Date:</span>
                        <span>Mar 10, 2023</span>
                    </div>
                    </div>
                </div>
            </div>
                <!-- Added pagination section at bottom of employee section -->
            <div class="pagination-container" id="paginationContainer">
                <div class="pagination-info">
                    <span id="paginationInfo">Showing 1-6 of 12 employees</span>
                </div>
                <div class="pagination-controls">
                    <button class="pagination-btn" id="prevBtn" disabled>
                        <span>←</span>
                        Previous
                    </button>
                    <div class="pagination-numbers pagination-btn" id="paginationNumbers">
                            <span>1</span>
                    </div>
                    <div class="pagination-numbers pagination-btn" id="paginationNumbers">
                            <span>2</span>
                    </div>
                    <div class="pagination-numbers pagination-btn" id="paginationNumbers">
                            <span>3</span>
                    </div>
                    <button class="pagination-btn" id="nextBtn">
                        Next
                        <span>→</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>