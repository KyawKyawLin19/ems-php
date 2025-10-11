<?php

require_once("Role.php");

if(isset($_POST['submit'])){
    //die(var_dump($_POST));
    $roleObj = new Role();
    $addRoleObj = $roleObj->addRoles($_POST);
    if ($addRoleObj) {
        echo "<script>alert('Successfully Created!');window.location.href='roles.php';</script>";
    }
}


?>



<?php require_once('layouts/master.php') ?>
    <!-- Add Employee Modal  -->
    <div>
        <div>
            <div>
                <h3>Add New Role</h3>
            </div>
            <form method="POST" id="addRoleForm" >
                <div class="form-group">
                    <label for="roleName">Role Name</label>
                    <input type="text" id="roleName" name="name" required>
                    <span class="input-focus"></span>
                </div>
                
                <div class="form-group">
                    <label for="roleDescription">Description</label>
                    <textarea id="roleDescription" rows="3" name="description" required></textarea>
                    <span class="input-focus"></span>
                </div>

                <div class="form-group">
                    <label for="roleEmoji">Role Emoji</label>
                    <input type="text" id="roleEmoji" name="emoji" required>
                </div>


                <div class="form-row">
                    <div class="form-group">
                        <label for="roleMinSalary">Base Salary</label>
                        <input type="number" id="roleMinSalary" min="0" step="1000" name="base_salary" required>
                        <span class="input-focus"></span>
                    </div>
                </div>

                <div class="modal-actions">
                    <button type="button" name ="cancel" class="btn btn-secondary" id="cancelRoleBtn">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Add Role</button>
                </div>
            </form>
        </div>
    </div>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>