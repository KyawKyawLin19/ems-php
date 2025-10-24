<?php

require_once("Employee.php");
require_once("Role.php");
//die(var_dump($_GET['id']));
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $employeeObj = new Employee;
    $employee_detail = $employeeObj->getEmployeeById($id);

    $roleObj = new Role();
    $id =  $employee_detail['role_id'];
    $getRoleName = $roleObj->getRoleNames($id);
    
    }
if(isset($_POST['delete'])){
    $employee_delete = $employeeObj->deleteEmployee($id);
    echo "<script>window.location.href='employees.php';</script>";
}
?>

<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
<!-- Add employeeDetailModal  -->
    <div id="employeeDetailModal" class="active" >
        <div class="employee-detail-content">
                <div>
                    <h3>Employee Details</h3>
                </div>
            <div class="employee-detail-body">
                <div class="employee-profile-section">
                    <div class="employee-profile-avatar" id="detailEmployeeAvatar">
                         
                    </div>
                    <div class="employee-profile-info">
                        <h2 id="detailEmployeeName"><?= $employee_detail['name'] ?></h2>
                        <p id="detailEmployeePosition"><?= $getRoleName?></p>
                        <span class="employee-status active" id="detailEmployeeStatus"><?= $employee_detail['employment_status']?></span>
                    </div>
                </div>
                
                <div class="employee-detail-grid">
                    <div class="detail-section">
                        <h4>Personal Information</h4>
                        <div class="detail-item">
                            <span class="detail-label">Full Name:</span>
                            <span class="detail-value" id="detailFullName"><?= $employee_detail['name']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Email:</span>
                            <span class="detail-value" id="detailEmail"><?= $employee_detail['email']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Phone:</span>
                            <span class="detail-value" id="detailPhone"><?= $employee_detail['phone']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Address:</span>
                            <span class="detail-value" id="detailAddress"><?= $employee_detail['address']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Gender:</span>
                            <span class="detail-value" id="detailGender"><?= $employee_detail['gender']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Date of Birth:</span>
                            <span class="detail-value" id="detailDateOfBirth"><?= $employee_detail['date_of_birth']?></span>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <h4>Work Information</h4>
                        <div class="detail-item">
                            <span class="detail-label">Department:</span>
                            <span class="detail-value" id="detailDepartment"><?= $employee_detail['department_id'] ?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Role:</span>
                            <span class="detail-value" id="detailRole"><?= $getRoleName ?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Status</span>
                            <span class="detail-value" id="detailPosition"><?= $employee_detail['employment_status']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Basic Salary:</span>
                            <span class="detail-value" id="detailSalary"><?= $employee_detail['basic_salary']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Start Date:</span>
                            <span class="detail-value" id="detailStartDate"><?= $employee_detail['hire_date']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Employee Code</span>
                            <span class="detail-value" id="detailEmployeeId"><?= $employee_detail['employee_code']?></span>
                        </div>
                    </div>
                </div>
                
                <form method="POST">
                    <div class="employee-actions">
                        <a type="edit" name="edit" class="btn btn-primary" id="editEmployeeBtn"
                                href="employee_edit.php?id=<?= $employee_detail['id'] ?>">
                            <span>✏️</span>
                            Edit Employee
                        </a>
                        <button class="btn btn-secondary" id="deactivateEmployeeBtn">
                            <span>🚫</span>
                            Deactivate
                        </button>
                        <button type="delete" name="delete" class="btn btn-danger" id="deleteEmployeeBtn">
                            <span>🗑️</span>
                            Delete Employee
                        </button>
                    </div>
                </form>
            </div>
            </div>
    </div>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>