<?php require_once('layouts/master.php') ?>
        <!-- Add Employee Modal  -->
        <div>
            <div>
                <div>
                    <h3>Add New Employee</h3>
                </div>
                <form id="addEmployeeForm" class="modal-form">
                    <!-- Combined name field like in registration  -->
                    <div class="form-group">
                        <label for="empName">Full Name</label>
                        <input type="text" id="empName" required>
                        <span class="input-focus"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="empEmail">Email Address</label>
                        <input type="email" id="empEmail" required>
                        <span class="input-focus"></span>
                    </div>

                    <!-- Added phone number field  -->
                    <div class="form-group">
                        <label for="empPhone">Phone Number</label>
                        <input type="tel" id="empPhone" required>
                        <span class="input-focus"></span>
                    </div>

                    <!-- Added address field  -->
                    <div class="form-group">
                        <label for="empAddress">Address</label>
                        <textarea id="empAddress" rows="3" required></textarea>
                        <span class="input-focus"></span>
                    </div>

                    <!-- Added gender selection with radio buttons  -->
                    <div class="form-group">
                        <label class="field-label">Gender</label>
                        <div class="radio-group">
                            <label class="radio-container">
                                <input type="radio" name="empGender" value="male" required>
                                <span class="radio-mark"></span>
                                Male
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="empGender" value="female" required>
                                <span class="radio-mark"></span>
                                Female
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="empGender" value="other" required>
                                <span class="radio-mark"></span>
                                Other
                            </label>
                        </div>
                    </div>

                    <!-- Added date of birth field (optional)  -->
                    <div class="form-group">
                        <label for="empDateOfBirth">Date of Birth <span class="optional">(Optional)</span></label>
                        <input type="date" id="empDateOfBirth">
                        <span class="input-focus"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="empDepartment">Department</label>
                            <select id="empDepartment" required>
                                <option value="">Select Department</option>
                                <option value="hr">Human Resources</option>
                                <option value="it">Information Technology</option>
                                <option value="finance">Finance</option>
                                <option value="marketing">Marketing</option>
                                <option value="sales">Sales</option>
                                <option value="operations">Operations</option>
                            </select>
                            <span class="input-focus"></span>
                        </div>

                        <!-- Added role dropdown  -->
                        <div class="form-group">
                            <label for="empRole">Role</label>
                            <select id="empRole" required>
                                <option value="">Select Role</option>
                                <option value="manager">HR</option>
                                <option value="senior">Team Leader</option>
                                <option value="junior"> Employee</option>
                                <option value="intern">Intern</option>
                            </select>
                            <span class="input-focus"></span>
                        </div>
                    </div>
                        
                        <!-- Updated salary field to match registration  -->
                        <div class="form-group">
                            <label for="empBasicSalary">Basic Salary</label>
                            <input type="number" id="empBasicSalary" min="0" step="100" required>
                            <span class="input-focus"></span>
                        </div>
                    

                    <!-- Added profile photo upload (optional)  -->
                    <div class="form-group">
                        <label for="empProfilePhoto">Profile Photo <span class="optional">(Optional)</span></label>
                        <div class="file-upload-container">
                            <input type="file" id="empProfilePhoto" accept="image/*" class="file-input">
                            <label for="empProfilePhoto" class="file-upload-label">
                                <span class="upload-icon">📷</span>
                            </label>
                            <div class="file-preview" id="empFilePreview"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="empStartDate">Start Date</label>
                        <input type="date" id="empStartDate" required>
                        <span class="input-focus"></span>
                    </div>

                    <div class="modal-actions">
                        <button type="button" class="btn btn-secondary" id="cancelBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>