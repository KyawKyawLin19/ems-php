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
                <div class="department-card">
                    <div class="department-icon">💻</div>
                    <h3>Information Technology</h3>
                    <p>15 employees</p>
                    <div class="department-stats">
                        <span>Budget: $250,000</span>
                        <span>Head: John Smith</span>
                    </div>
                </div>
                <div class="department-card">
                    <div class="department-icon">👥</div>
                    <h3>Human Resources</h3>
                    <p>8 employees</p>
                    <div class="department-stats">
                        <span>Budget: $180,000</span>
                        <span>Head: Sarah Wilson</span>
                    </div>
                </div>
                <div class="department-card">
                    <div class="department-icon">📊</div>
                    <h3>Marketing</h3>
                    <p>12 employees</p>
                    <div class="department-stats">
                        <span>Budget: $200,000</span>
                        <span>Head: Mike Johnson</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>