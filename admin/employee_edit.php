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
                <input type="text" name="name" value="<?= $employee_detail['name'] ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= $employee_detail['email'] ?>" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" value="<?= $employee_detail['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address"><?= $employee_detail['address'] ?></textarea>
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
                <input type="date" name="date_of_birth" value="<?= $employee_detail['date_of_birth'] ?>">
            </div>

            <!-- Right side -->
            <div class="form-group">
                <label>Department</label>
                    <input type="text" name="department_id" value="<?= $employee_detail['department_id'] ?>">
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" name="role_id" value="<?=$getRoleName ?>">
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
                <input type="number" step="0.01" name="basic_salary" value="<?= $employee_detail['basic_salary'] ?>">
            </div>
            <div class="form-group">
                <label>Hire Date</label>
                <input type="date" name="hire_date" value="<?= $employee_detail['hire_date'] ?>">
            </div>
            <div class="form-group">
                <label>Employee Code</label>
                <input type="text" name="employee_code" value="<?= $employee_detail['employee_code'] ?>" readonly>
            </div>
        </div>

        <div class="employee-edit-actions">
            <button type="submit" class="btn btn-primary">💾 Save Changes</button>
            <a href="employee_details.php?id=<?= $employee_detail['id'] ?>" class="btn btn-secondary">⬅️ Cancel</a>
        </div>
    </form>
</div>


<?php require_once('layouts/footer.php') ?>