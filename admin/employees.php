<?php
require_once('Employee.php');
require_once('Department.php');
$employeeObj = new Employee();
$employees = $employeeObj->getEmployeeByRole(3);
$departmentObj = new Department();
$departments = $departmentObj->getAllDepartments();
?>
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

            <?php if($employees): ?>
                <div class="employee-filters">
                    <input type="text" placeholder="Search employees..." class="search-input" id="employeeSearch">
                    <select class="filter-select" id="departmentFilter">
                        <option value="1">All Departments</option>
                        <option value="2">Human Resources</option>
                        <option value="3">Information Technology</option>
                        <option value="4">Finance</option>
                        <option value="marketing">Marketing</option>
                        <option value="sales">Sales</option>
                        <option value="operations">Operations</option>
                    </select>
                </div>
                <div class="employee-grid" id="employeeGrid">
                    <!-- Employee cards will be populated by JavaScript  -->
                
                    <?php foreach ($employees as $employee): ?>
                        <a  href="employee_details.php?id=<?= escape($employee->id)?>" class="employee-card"  data-department="it">
                            <div class="employee-header">
                            <div class="employee-avatar">MC</div>
                            <div class="employee-info">
                                <h4><?php escape(ucwords($employee->name)) ?></h4>
                                <p>Software Developer</p>
                            </div>
                            </div>
                            <div class="employee-details">
                            <div class="employee-detail">
                                <span>Department:</span>
                                <span><?php escape($employee->department_id)  ?></span>
                            </div>
                            <div class="employee-detail">
                                <span>Email:</span>
                                <span><?php escape($employee->email) ?></span>
                            </div>
                            <div class="employee-detail">
                                <span>Phone:</span>
                                <span><?php escape($employee->phone) ?></span>
                            </div>
                            <div class="employee-detail">
                                <span>Status:</span>
                                <span class="employee-status <?= escape($employee->employment_status) ?>">
                                    <?= escape(ucwords(str_replace('_', ' ', $employee->employment_status))) ?>
                                </span>
                            </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    
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
            <?php else: ?>
                <p>No employees found.</p>
            <?php endif; ?>
        </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>
