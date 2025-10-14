<?php 
require_once('Employee.php');
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
if(isset($_POST['submit'])){
    //die(var_dump($_POST));
    $id = $_POST['id'];
    $employeeObj = new Employee;
    $employee_edit = $employeeObj->updateEmployee($_POST);   
}
?>
<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

<div class="edit-employee-container">
    <h2>✏️ Edit Employee</h2>
    <form action="employee_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $employee_detail['id'] ?>">

        <div class="edit-form-grid">
            <!-- Left side -->
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" value="<?php if(isset($employee_detail['name'])){echo $employee_detail['name'];} ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php if(isset($employee_detail['email'])){echo $employee_detail['email'];} ?>" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php if(isset($employee_detail['phone'])){echo $employee_detail['phone'];} ?>" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address"><?php if(isset($employee_detail['address'])){echo $employee_detail['address'];} ?></textarea>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" required>
                    <option value="Male" <?= $employee_detail['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= $employee_detail['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                    <option value="Other" <?= $employee_detail['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="date_of_birth" value="<?php if(isset($employee_detail['date_of_birth'])){echo $employee_detail['date_of_birth'];} ?>">
            </div>

            <!-- Right side -->
            <div class="form-group">
                <label>Department</label>
                    <input type="text" name="department_id" value="<?php if(isset($employee_detail['department_id'])){echo $employee_detail['department_id'];} ?>">
            </div>
            <div class="form-group">
                <label>Role</label>
                <select name="role_id" required>
                    <option value="1" <?= $employee_detail['role_id'] == '1' ? 'selected' : '' ?>>Super Admin</option>
                    <option value="2" <?= $employee_detail['role_id'] == '2' ? 'selected' : '' ?>>HR</option>
                    <option value="3" <?= $employee_detail['role_id'] == '3' ? 'selected' : '' ?>>Employee</option>
                </select>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" required>
                    <option value="Active" <?= $employee_detail['employment_status'] == 'Active' ? 'selected' : '' ?>>Active</option>
                    <option value="Inactive" <?= $employee_detail['employment_status'] == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                    <option value="On Leave" <?= $employee_detail['employment_status'] == 'On Leave' ? 'selected' : '' ?>>On Leave</option>
                    <option value="Terminated" <?= $employee_detail['employment_status'] == 'Terminated' ? 'selected' : '' ?>>Terminated</option>
                </select>
            </div>
            <div class="form-group">
                <label>Basic Salary</label>
                <input type="number" step="0.01" name="basic_salary" value="<?php if(isset($employee_detail['basic_salary'])){echo $employee_detail['basic_salary'];} ?>">
            </div>
            <div class="form-group">
                <label>Hire Date</label>
                <input type="date" name="hire_date" value="<?php if(isset($employee_detail['hire_date'])){echo $employee_detail['hire_date'];} ?>">
            </div>
            <div class="form-group">
                <label>Employee Code</label>
                <input type="text" name="employee_code" value="<?php if(isset($employee_detail['employee_code'])){echo $employee_detail['employee_code'];} ?>" readonly>
            </div>
        </div>
      

        <div class="employee-edit-actions">
            <button name="submit" type="submit" class="btn btn-primary">💾 Save Changes</button>
            <a href="employee_details.php?id=<?= $employee_detail['id'] ?>" class="btn btn-secondary">⬅️ Cancel</a>
        </div>
        
    </form>
</div>


<?php require_once('layouts/footer.php') ?>