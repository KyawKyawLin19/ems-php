<?php

require_once('Department.php');
$departmentObj = new Department();
$departments = $departmentObj->getAllDepartments();

?>

<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

    <!-- Departments Section -->
        <section id="departments-section" class="content-section active">
            <div class="section-header">
                <h2>Department Management</h2>
                <a href="department_add.php" class="btn btn-primary" id="addDepartmentBtn">
                    <span>➕</span>
                    Add Department
                </a>
            </div>
            <div class="departments-grid">
                <?php if($departments): ?>
                    <?php foreach ($departments as $department): ?>
                        <div class="department-card">
                            <div class="department-icon"><?= $department->icon?></div>
                            <h3><?= $department->name ?></h3>
                            <p>15 employees</p>
                            <div class="department-stats">
                                <span>Status: <span class="status <?= strtolower(trim($department->status)) ?>"><?= $department->status ?></span></span>
                                <span>Head ID: <?= $department->leader_id ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No departments found.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>
