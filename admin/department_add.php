<?php



if(isset($_POST['cancel'])){
    header('Location: departments.php');
    exit;
}

if(isset($_POST['submit'])){
    require_once('Department.php');
    $departmentObj = new Department();
    $data = [
        'name' => $_POST['department_name'],
        'code' => $_POST['department_code'],
        'icon' => $_POST['icon'],
        'leader_id' => $_POST['department_head'],
        'status' => $_POST['status'],
        'description' => $_POST['description']
    ];
    $result = $departmentObj->addDepartment($data);
    if($result){
        header('Location: departments.php');
        exit;
    } else {
        $error = "Failed to add department. Please try again.";
    }
}

?>

<?php require_once('layouts/master.php') ?>
        <div>
            <div>
                <div>
                    <h3>Add New Department</h3>
                    <br>
                </div>
                <form id="addDepartmentForm" action="" method="POST">
                    <div class="form-group">
                        <label for="departmentName">Department Name</label>
                        <input type="text" id="departmentName" name="department_name" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="departmentCode">Department Code</label>
                        <input type="text" id="departmentCode" name="department_code" placeholder="e.g., IT, HR, MKT" required>
                    </div>
                    <br>
                    <div class="form-group" style="width:150px">
                        <label for="departmentIcon">Department Icon</label>
                        <select id="departmentIcon" name="icon" style="text-align:center" required>
                            <option value="">Select Icon</option>
                            <option value="💻">💻</option>
                            <option value="👥">👥</option>
                            <option value="📊">📊</option>
                            <option value="💰">💰</option>
                            <option value="🏭">🏭</option>
                            <option value="📞">📞</option>
                            <option value="🔧">🔧</option>
                            <option value="📚">📚</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="departmentHead">Department Head</label>
                        <input type="text" name="department_head" placeholder="Enter Employee Code" required>
                    </div>
                    <br>
                    <div class="form-group" style="width:170px">
                        <label for="departmentStatus">Status</label>
                        <select id="departmentStatus" name="status" style="text-align:center" required>
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="departmentDescription">Description</label>
                        <textarea id="departmentDescription" name="description" rows="3" placeholder="Brief description of the department's role and responsibilities"></textarea>
                    </div>
                    <div class="form-actions">
                        <button name="cancel" formnovalidate type="submit" class="btn btn-secondary" >Cancel</button>
                        <button name="submit" type="submit" class="btn btn-primary">Add Department</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>
