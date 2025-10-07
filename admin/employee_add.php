<?php

require_once('Employee.php');
if(isset($_POST['submit'])) {
    $employeeObj = new Employee();
    $result = $employeeObj->addEmployee($_POST);
    if ($result) {
        echo "<script>alert('Successfully Created!');window.location.href='employees.php';</script>";
    }
}

?>

<?php require_once('layouts/master.php') ?>
        <!-- Add Employee Modal  -->
        <div>
            <div>
                <div>
                    <h3>Add New Employee</h3>
                </div>
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
                                <option value="">Select Department</option>
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
                                <option value="">Select Role</option>
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
                            <label for="empBasicSalary">Basic Salary</label>
                            <input type="number" id="empBasicSalary" name="basic_salary" min="0" step="100" required>
                            <span class="input-focus"></span>
                        </div>
                    

                    <!-- Added profile photo upload (optional)  -->
                    <div class="form-group">
                        <label for="empProfilePhoto">Profile Photo <span class="optional">(Optional)</span></label>
                        <div class="file-upload-container">
                            <input type="file" id="empProfilePhoto" accept="image/*" class="file-input">
                            <label for="empProfilePhoto" class="file-upload-label">
                                <span class="upload-icon">📷</span>
                            </label>
                            <div class="file-preview" id="empFilePreview"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="empStartDate">Start Date</label>
                        <input type="date" id="empStartDate" name="hire_date" required>
                        <span class="input-focus"></span>
                    </div>

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