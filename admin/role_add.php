<?php require_once('layouts/master.php') ?>
    <!-- Add Employee Modal  -->
    <div id="addRoleModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add New Role</h3>
                <button class="close-btn" id="closeRoleModal">&times;</button>
            </div>
            <form id="addRoleForm" class="modal-form">
                <div class="form-group">
                    <label for="roleName">Role Name</label>
                    <input type="text" id="roleName" required>
                    <span class="input-focus"></span>
                </div>
                
                <div class="form-group">
                    <label for="roleDescription">Description</label>
                    <textarea id="roleDescription" rows="3" required></textarea>
                    <span class="input-focus"></span>
                </div>

                <div class="form-group">
                    <label for="roleLevel">Role Level</label>
                    <select id="roleLevel" required>
                        <option value="">Select Level</option>
                        <option value="executive">Executive</option>
                        <option value="senior">Senior</option>
                        <option value="mid">Mid-Level</option>
                        <option value="junior">Junior</option>
                        <option value="entry">Entry Level</option>
                    </select>
                    <span class="input-focus"></span>
                </div>

                <div class="form-group">
                    <label for="roleDepartment">Department</label>
                    <select id="roleDepartment" required>
                        <option value="">Select Department</option>
                        <option value="hr">Human Resources</option>
                        <option value="it">Information Technology</option>
                        <option value="finance">Finance</option>
                        <option value="marketing">Marketing</option>
                        <option value="sales">Sales</option>
                        <option value="operations">Operations</option>
                        <option value="all">All Departments</option>
                    </select>
                    <span class="input-focus"></span>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="roleMinSalary">Minimum Salary</label>
                        <input type="number" id="roleMinSalary" min="0" step="1000" required>
                        <span class="input-focus"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="roleMaxSalary">Maximum Salary</label>
                        <input type="number" id="roleMaxSalary" min="0" step="1000" required>
                        <span class="input-focus"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="field-label">Permissions</label>
                    <div class="checkbox-group">
                        <label class="checkbox-container">
                            <input type="checkbox" name="rolePermissions" value="read">
                            <span class="checkbox-mark"></span>
                            Read Access
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="rolePermissions" value="write">
                            <span class="checkbox-mark"></span>
                            Write Access
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="rolePermissions" value="delete">
                            <span class="checkbox-mark"></span>
                            Delete Access
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="rolePermissions" value="admin">
                            <span class="checkbox-mark"></span>
                            Admin Access
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="field-label">Status</label>
                    <div class="radio-group">
                        <label class="radio-container">
                            <input type="radio" name="roleStatus" value="active" checked required>
                            <span class="radio-mark"></span>
                            Active
                        </label>
                        <label class="checkbox-container">
                            <input type="radio" name="roleStatus" value="inactive" required>
                            <span class="radio-mark"></span>
                            Inactive
                        </label>
                    </div>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn btn-secondary" id="cancelRoleBtn">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Role</button>
                </div>
            </form>
        </div>
    </div>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>