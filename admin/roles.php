<?php
require_once('Role.php');
$roleObj = new Role();
$roles = $roleObj->getAllRoles();
?>

<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
<!-- Roles Section -->
    <section id="roles-section" class="content-section active">
        <div class="section-header">
            <h2>Role Management</h2>
            <a href="role_add.php" class="btn btn-primary" id="addRoleBtn">
                <span>➕</span>
                Add Role
            </a>
        </div>
        <div class="roles-grid">
            <?php foreach ($roles as $role): ?>
            <div class="role-card">
                <div class="role-header">
                    <span class="role-icon"><?= $role['emoji'] ?></span>
                    <h3><?= $role['role_name'] ?></h3>
                </div>
                <p><?= $role['description'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    </main>
</div>
<?php require_once('layouts/footer.php') ?>
