<?php require_once('layouts/master.php') ?>

        <div>
            <div>
                <div>
                    <h3>Add New Department</h3>
                    <span class="close">&times;</span>
                </div>
                <form id="addDepartmentForm">
                    <div class="form-group">
                        <label for="departmentName">Department Name</label>
                        <input type="text" id="departmentName" name="departmentName" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentCode">Department Code</label>
                        <input type="text" id="departmentCode" name="departmentCode" placeholder="e.g., IT, HR, MKT" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentHead">Department Head</label>
                        <input type="text" id="departmentHead" name="departmentHead" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentBudget">Annual Budget</label>
                        <input type="number" id="departmentBudget" name="departmentBudget" step="1000" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentLocation">Location</label>
                        <input type="text" id="departmentLocation" name="departmentLocation" placeholder="e.g., Building A, Floor 3" required>
                    </div>
                    <div class="form-group">
                        <label for="departmentEmail">Department Email</label>
                        <input type="email" id="departmentEmail" name="departmentEmail" placeholder="e.g., dept@company.com">
                    </div>
                    <div class="form-group">
                        <label for="departmentIcon">Department Icon</label>
                        <select id="departmentIcon" name="departmentIcon" required>
                            <option value="">Select Icon</option>
                            <option value="💻">💻 Technology</option>
                            <option value="👥">👥 Human Resources</option>
                            <option value="📊">📊 Marketing</option>
                            <option value="💰">💰 Finance</option>
                            <option value="🏭">🏭 Operations</option>
                            <option value="📞">📞 Customer Service</option>
                            <option value="🔧">🔧 Maintenance</option>
                            <option value="📚">📚 Training</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="departmentDescription">Description</label>
                        <textarea id="departmentDescription" name="departmentDescription" rows="3" placeholder="Brief description of the department's role and responsibilities"></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" >Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Department</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>