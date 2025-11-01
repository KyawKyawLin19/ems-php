<?php
require_once("Employee.php");
require_once("Role.php");

// Fetch employee details
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $employeeObj = new Employee;
    $roleObj = new Role();

    $employee_detail = $employeeObj->getEmployeeById($id);
    if (!$employee_detail) {
        die("Employee not found.");
    }
    $getRoleName = $roleObj->getRoleNames($employee_detail->role_id);
}

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $employeeObj = new Employee();
    $employee_id = (int)$_POST['employee_id'];
    $action = $_POST['action'];

    if (!$employee_id || !$action) die('Invalid request.');

    if ( $action === 'update'){
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'gender' => $_POST['gender'],
            'date_of_birth' => $_POST['date_of_birth'],
            'employee_code' => $_POST['employee_code'],
            'department_id' => $_POST['department_id'],
            'role_id' => $_POST['role_id'],
            'basic_salary' => $_POST['basic_salary'],
            'hire_date' => $_POST['hire_date']
        ];
        if ($employeeObj->updateEmployee($employee_id, $data)) {
            header("Location: employee_details.php?id=$employee_id");
            exit;
        } else {
            die('Failed to update employee.');
        }
    } elseif ($action === 'activate') {
        if ($employeeObj->activateEmployee($employee_id)) {
            header("Location: employee_details.php?id=$employee_id");
            exit;
        } else die('Failed to activate employee.');
    } elseif ($action === 'deactivate') {
        if ($employeeObj->deactivateEmployee($employee_id)) {
            header("Location: employee_details.php?id=$employee_id");
            exit;
        } else die('Failed to deactivate employee.');
    } elseif ($action === 'delete') {
        if ($employeeObj->deleteEmployee($employee_id)) {
            header("Location: employees.php");
            exit;
        } else die('Failed to delete employee.');
    }
}
?>

<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

<div id="employeeDetailModal" class="active">
    <div class="employee-detail-content">
        <h3>Employee Details</h3>

        <div class="employee-detail-body">
            <div class="employee-profile-section">
                <div class="employee-profile-avatar" id="detailEmployeeAvatar"></div>
                <div class="employee-profile-info">
                    <h2><?= escape(ucwords($employee_detail->name)) ?></h2>
                    <p><?= escape($getRoleName) ?></p>
                    <?php if ($employee_detail->is_terminated == 0): ?>
                        <span class="employee-status <?= escape($employee_detail->employment_status) ?>">
                            <?= escape(ucwords(str_replace('_', ' ', $employee_detail->employment_status))) ?>
                        </span>
                    <?php else: ?>
                        <span class="employee-status <?= escape($employee_detail->employment_status) ?>" style="background-color: red;color: white;">
                            <?= escape("DEACTIVATED") ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <form method="POST">
            <div class="employee-detail-grid">
                <!-- Personal Info -->
                <div class="detail-section">
                    <h4>Personal Information</h4>

                    <div class="detail-item">
                        <span class="detail-label">Full Name:</span>
                        <span class="detail-value editable-text"><?= escape(ucwords($employee_detail->name)) ?></span>
                        <input type="text" name="name" value="<?= escape($employee_detail->name) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Email:</span>
                        <span class="detail-value editable-text"><?= escape($employee_detail->email) ?></span>
                        <input type="email" name="email" value="<?= escape($employee_detail->email) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Phone:</span>
                        <span class="detail-value editable-text"><?= escape($employee_detail->phone) ?></span>
                        <input type="text" name="phone" value="<?= escape($employee_detail->phone) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Address:</span>
                        <span class="detail-value editable-text"><?= escape(ucwords($employee_detail->address)) ?></span>
                        <input type="text" name="address" value="<?= escape($employee_detail->address) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Gender:</span>
                        <span class="detail-value editable-text"><?= escape(ucwords($employee_detail->gender)) ?></span>
                        <select name="gender" class="editable-input" style="display:none;">
                            <option value="male" <?= $employee_detail->gender == 'male' ? 'selected' : '' ?>>Male</option>
                            <option value="female" <?= $employee_detail->gender == 'female' ? 'selected' : '' ?>>Female</option>
                            <option value="other" <?= $employee_detail->gender == 'other' ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Date of Birth:</span>
                        <span class="detail-value editable-text"><?= escape($employee_detail->date_of_birth) ?></span>
                        <input type="date" name="date_of_birth" value="<?= escape($employee_detail->date_of_birth) ?>" class="editable-input" style="display:none;">
                    </div>
                </div>

                <!-- Work Info -->
                <div class="detail-section">
                    <h4>Work Information</h4>

                    <div class="detail-item">
                        <span class="detail-label">Employee Code:</span>
                        <span class="detail-value editable-text"><?= escape($employee_detail->employee_code) ?></span>
                        <input type="text" name="employee_code" value="<?= escape($employee_detail->employee_code) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Department:</span>
                        <span class="detail-value editable-text"><?= escape($employee_detail->department_id) ?></span>
                        <input type="text" name="department_id" value="<?= escape($employee_detail->department_id) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Role:</span>
                        <span class="detail-value editable-text"><?= escape($getRoleName) ?></span>
                        <input type="text" name="role_id" value="<?= escape($employee_detail->role_id) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Basic Salary:</span>
                        <span class="detail-value editable-text">$<?= escape($employee_detail->basic_salary) ?></span>
                        <input type="number" step="0.01" name="basic_salary" value="<?= escape($employee_detail->basic_salary) ?>" class="editable-input" style="display:none;">
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Hire Date:</span>
                        <span class="detail-value editable-text"><?= escape(date('Y/m/d', strtotime($employee_detail->hire_date))) ?></span>
                        <input type="date" name="hire_date" value="<?= escape(date('Y-m-d', strtotime($employee_detail->hire_date))) ?>" class="editable-input" style="display:none;">
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            
                <div class="employee-actions">
                    <button id="editBtn" class="btn btn-primary">✏️ Edit Employee</button>
                    <button type="submit" id="updateBtn" name="action" value="update" class="btn btn-success" style="display:none;">💾 Update</button>
                    <button id="cancelBtn" class="btn btn-secondary" style="display:none;">❌ Cancel</button>

                    <?php if ($employee_detail->is_terminated == 0): ?>
                        <button type="submit" name="action" value="deactivate" class="btn btn-warning">🚫 Deactivate</button>
                    <?php else: ?>
                        <button type="submit" name="action" value="activate" class="btn btn-success">✅ Activate</button>
                    <?php endif; ?>

                    <button type="submit" name="action" value="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">🗑️ Delete</button>
                    <input type="hidden" name="employee_id" value="<?= escape($employee_detail->id) ?>">
                </div>
            </form>
        </div>
    </div>
</div>

</main>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const editBtn = document.getElementById("editBtn");
  const updateBtn = document.getElementById("updateBtn");
  const cancelBtn = document.getElementById("cancelBtn");
  const inputs = document.querySelectorAll(".editable-input");
  const texts = document.querySelectorAll(".editable-text");

  editBtn.addEventListener("click", function(e) {
    e.preventDefault();
    editBtn.style.display = "none";
    updateBtn.style.display = "inline-block";
    cancelBtn.style.display = "inline-block";
    texts.forEach(t => t.style.display = "none");
    inputs.forEach(i => i.style.display = "inline-block");
  });

  cancelBtn.addEventListener("click", function(e) {
    e.preventDefault();
    editBtn.style.display = "inline-block";
    updateBtn.style.display = "none";
    cancelBtn.style.display = "none";
    texts.forEach(t => t.style.display = "inline-block");
    inputs.forEach(i => i.style.display = "none");
  });
});
</script>

<?php require_once('layouts/footer.php') ?>
