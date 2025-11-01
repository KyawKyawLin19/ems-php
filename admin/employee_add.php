<?php

require_once('Employee.php');
if(isset($_POST['submit'])) {
    $employeeObj = new Employee();
    $loggedInUserId = 1;
    $result = $employeeObj->addEmployee($_POST,$loggedInUserId);
    if ($result) {
        echo "<script>alert('Successfully Created!');window.location.href='employees.php';</script>";
    }
}

?>

<?php require_once('layouts/master.php') ?>
        <header class="main-header">
            <div class="header-left">
                <h1 id="pageTitle">Add New Employee</h1><br>
                <p>Ready to add a new employee? Fill out the form below.</p>
            </div>
            <div class="header-right">
                <button class="notification-btn">
                    <span>🔔</span>
                    <span class="notification-badge">3</span>
                </button>
                <div class="date-display" id="currentDate"></div>
            </div>
        </header>
        <div>
            <div>
                <form method="POST" id="addEmployeeForm" class="modal-form">
                    <!-- Combined name field like in registration  -->
                    <div class="form-group">
                        <label for="empName">Full Name</label>
                        <input type="text" id="empName" name="name" required>
                        <span class="input-focus"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="empEmail">Email Address</label>
                        <input type="email" id="empEmail" name="email" required>
                        <span class="input-focus"></span>
                    </div>

                    <!-- Added phone number field  -->
                    <div class="form-group">
                        <label for="empPhone">Phone Number</label>
                        <input type="tel" id="empPhone" name="phone" required>
                        <span class="input-focus"></span>
                    </div>

                    <!-- Added address field  -->
                    <div class="form-group">
                        <label for="empAddress">Address</label>
                        <textarea id="empAddress" rows="3" name="address" required></textarea>
                        <span class="input-focus"></span>
                    </div>

                    <!-- Added gender selection with radio buttons  -->
                    <div class="form-group">
                        <label class="field-label">Gender</label>
                        <div class="radio-group">
                            <label class="radio-container">
                                <input type="radio" name="gender" value="male" required>
                                <span class="radio-mark"></span>
                                Male
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="gender" value="female" required>
                                <span class="radio-mark"></span>
                                Female
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="gender" value="other" required>
                                <span class="radio-mark"></span>
                                Other
                            </label>
                        </div>
                    </div>

                    <!-- Added date of birth field (optional)  -->
                    <div class="form-group">
                        <label for="empDateOfBirth">Date of Birth <span class="optional">(Optional)</span></label>
                        <input type="date" id="empDateOfBirth" name="date_of_birth">
                        <span class="input-focus"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="empDepartment">Department</label>
                            <select id="empDepartment" name="department_id" required>
                                <option>Select Department</option>
                                <option value="1">Human Resources</option>
                                <option value="2">Information Technology</option>
                                <option value="3">Finance</option>
                                <option value="4">Marketing</option>
                                <option value="5">Sales</option>
                                <option value="6">Operations</option>
                            </select>
                            <span class="input-focus"></span>
                        </div>

                        <!-- Added role dropdown  -->
                        <div class="form-group">
                            <label for="empRole">Role</label>
                            <select id="empRole" name="role_id" required>
                                <option>Select Role</option>
                                <option value="2">HR</option>
                                <option value="4">Team Leader</option>
                                <option value="3"> Employee</option>
                                <option value="5">Intern</option>
                            </select>
                            <span class="input-focus"></span>
                        </div>
                    </div>
                        
                        <!-- Updated salary field to match registration  -->
                        <div class="form-group">
                            <label for="empBasicSalary">Basic Salary ($)</label>
                            <input type="number" id="empBasicSalary" name="basic_salary" min="0" step="100" required>
                            <span class="input-focus"></span>
                        </div>

                    <div class="form-group">
                        <label for="empStartDate">Hire Date</label>
                        <input type="date" id="empStartDate" name="hire_date" required>
                        <span class="input-focus"></span>
                    </div>

                    <!-- Added employee status field -->
                    <!-- <div class="form-group">
                        <label class="field-label">Employee Status</label>
                        <div class="radio-group">
                            <label class="radio-container">
                                <input type="radio" name="status" value="active" required>
                                <span class="radio-mark"></span>
                                Active
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="status" value="inactive" required>
                                <span class="radio-mark"></span>
                                Inactive
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="status" value="on_leave" required>
                                <span class="radio-mark"></span>
                                On Leave
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="status" value="terminated" required>
                                <span class="radio-mark"></span>
                                Terminated
                            </label>
                        </div>
                    </div> -->

                    <div class="modal-actions">
                        <button type="button" name="cancel" class="btn btn-secondary" id="cancelBtn">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-primary">Add Employee</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>
