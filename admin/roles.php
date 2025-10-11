<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
<!-- Roles Section -->
    <section id="roles-section" class="content-section">
        <div class="section-header">
            <h2>Role Management</h2>
            <a href="role_add.php" class="btn btn-primary" id="addRoleBtn">
                <span>➕</span>
                Add Role
            </a>
        </div>
        <div class="roles-grid">
            <div class="role-card">
                <div class="role-header">
                    <span class="role-icon">👑</span>
                    <h3>Super Admin</h3>
                </div>
                <p>Full system access and management capabilities</p>
                <div class="role-permissions">
                    <span class="permission-tag">All Permissions</span>
                </div>
            </div>
            <div class="role-card">
                <div class="role-header">
                    <span class="role-icon">🧑‍💼</span>
                    <h3>HR</h3>
                </div>
                <p>HR and employee management, and team leader role assignment</p>
                <div class="role-permissions">
                    <span class="permission-tag">HR and employee management</span>
                    <span class="permission-tag">leader role assignment</span>
                </div>
            </div>
            <div class="role-card">
                <div class="role-header">
                    <span class="role-icon">👨‍💼</span>
                    <h3>Team Leader</h3>
                </div>
                <p>Team management and reporting access</p>
                <div class="role-permissions">
                    <span class="permission-tag">Team Management</span>
                    <span class="permission-tag">Reports</span>
                </div>
            </div>
            <div class="role-card">
                <div class="role-header">
                    <span class="role-icon">👤</span>
                    <h3>Employee</h3>
                </div>
                <p>Basic access to personal information and tasks</p>
                <div class="role-permissions">
                    <span class="permission-tag">Profile</span>
                    <span class="permission-tag">Tasks</span>
                </div>
            </div>
        </div>
    </section>

    </main>
</div>
<?php require_once('layouts/footer.php') ?>
