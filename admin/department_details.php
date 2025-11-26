<?php 
require_once("Department.php");
require_once("Employee.php");
require_once("Role.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    
    $departmentObj = new Department();
    $employeeObj   = new Employee();
    //die(var_dump($_POST));
    $id = $_POST['id'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $leader_id = $_POST['leader_id'];
    $action = $_POST['action'];

    if ( $action === 'update'){
        $updateDepartment = $departmentObj->updateDepartment($id, $name, $status, $leader_id);
        header("Location: department_details.php?id=" . $id);
        exit;
    } elseif ($action === 'delete') {
        $deleteDepartment = $departmentObj->deleteDepartment($id);
        header("Location: departments.php");
        exit;
    } 

}

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $departmentObj = new Department();
    $department = $departmentObj->getDepartmentById($id);
    $employeeObj = new Employee();
    $leader = $employeeObj->getEmployeeById($department->leader_id);
    $employees = $employeeObj->getEmployeeByDepartment($department->id);
    $employee_count = count($employees);
    $roleObj = new Role();
    //die(var_dump($department->leader_id,$leader));
}

?>


<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

<div class="department-details-container">
    
    <form method="POST">
    <!-- Header -->
    <div class="details-header">
        <h2><?= $department->name ?> Department</h2>
        <a href="departments.php" class="btn btn-secondary">← Back</a>
    </div>

    <!-- Main Info -->
    <div class="department-info">
        <div class="info-icon">
            <?= $department->icon ?>
        </div>

        <div class="info-content">
            <span class="editable-text"><h3><?= $department->name ?></h3></span>
            <input type="text" name="name" value="<?= escape($department->name) ?>" class="editable-input" style="display:none;">

            <p>
                <strong>Status:</strong> 
                <span class="editable-text status <?= strtolower($department->status) ?>">
                    <?= $department->status ?>
                </span>
                <select name="status" class="editable-input status <?= strtolower($department->status) ?>" style="display:none;">
                    <option value="active" <?= $department->status == 'active' ? 'selected' : '' ?>>ACTIVE</option>
                    <option value="inactive" <?= $department->status== 'inactive' ? 'selected' : '' ?>>INACTIVE</option>
                </select>
            </p>

            <div class="info-row">
                <strong>Department ID:</strong>
                <span class="editable-text"><?= $department->id ?></span>
            </div>
            <input type="text" name="id" value="<?= escape($department->id) ?>" class="editable-input" style="display:none;">
            

            <div class="info-row">
                <strong>Department Head:</strong>
                <span class="editable-text"><?= $leader ? $leader->name : "Not Assigned" ?></span>
            </div>
            <input type="text" name="leader_id" value="<?= escape($department->leader_id) ?>" class="editable-input" style="display:none;">
        </div>
    </div>

    <!-- Stats -->
    <div class="details-stats">
        <div class="stat-box">
            <h4>Total Employees</h4>
            <p><?= $employee_count ?></p>
        </div>


        <div class="stat-box">
            <h4>Created On</h4>
            <p><?= date("d M Y", strtotime($department->created_at)) ?></p>
        </div>
    </div>

    <!-- Employee List -->
    <div class="members-section">
        <h3>Department Members</h3>

        <?php if (!empty($employees)): ?>
            <div class="members-grid">
                <?php foreach($employees as $emp): ?>
                    <div class="member-card">
                        <div class="member-avatar">👤</div>
                        <?php $role_name = $roleObj->getRoleNames($emp->role_id); ?>
                        <div>
                            <strong><?= $emp->name ?></strong><br>
                            <small><?= $role_name ?></small>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No employees in this department.</p>
        <?php endif; ?>
    </div>

    <!-- Actions -->
    <div class="actions">
        <a href="departments.php" class="btn btn-primary">Back</a>
        <button id="editBtn" class="btn btn-primary">✏ Edit Department</button>
        <button type="submit" id="updateBtn" name="action" value="update" class="btn btn-success" style="display:none;">💾 Update</button>
        <button id="cancelBtn" class="btn btn-secondary" style="display:none;">❌ Cancel</button>
        <button type="submit" name="action" value="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this department?')">🗑 Delete</button>
    </div>
    </form>
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