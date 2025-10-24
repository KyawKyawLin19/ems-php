<?php 


?>



<?php require_once('layouts/master.php') ?>

        <div>
            <div>
                <div>
                    <h3>Add New Department</h3>
                    <span class="close">&times;</span>
                </div>
                <form method="POST" id="addDepartmentForm">
                    <div class="form-group">
                        <label for="departmentName">Department Name</label>
                        <input type="text" id="departmentName" name="department_name" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentCode">Department Code</label>
                        <input type="text" id="departmentCode" name="department_code" placeholder="e.g., IT, HR, MKT" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentHead">Department Head</label>
                        <input type="text" id="departmentHead" name="leader_id" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentIcon">Department Icon</label>
                        <select id="departmentIcon" name="icon" required>
                            <option value="">Select Icon</option>
                            <option value="1">💻 Technology</option>
                            <option value="2">👥 Human Resources</option>
                            <option value="3">📊 Marketing</option>
                            <option value="4">💰 Finance</option>
                            <option value="5">🏭 Operations</option>
                            <option value="6">📞 Customer Service</option>
                            <option value="7">🔧 Maintenance</option>
                            <option value="8">📚 Training</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="departmentDescription">Description</label>
                        <textarea id="departmentDescription" name="description" rows="3" placeholder="Brief description of the department's role and responsibilities"></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="button" name="cancel" class="btn btn-secondary" >Cancel</button>
                        <button type="submit" name="submit" class="btn btn-primary">Add Department</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>