<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

   <section id="settings-section" class="content-section">
    
        <div class="section-header">
            <h2>System Settings</h2>
            <div class="header-actions">
                <button class="btn btn-secondary" id="exportSettingsBtn">
                    <span>📤</span>
                    Export Settings
                </button>
                <button class="btn btn-primary" id="saveSettingsBtn">
                    <span>💾</span>
                    Save Changes
                </button>
            </div>
        </div>
        
            <!-- Settings Navigation  -->
        <div class="settings-nav">
            <button class="settings-nav-btn active" data-settings="general">
                <span>⚙️</span>
                General
            </button>
            <button class="settings-nav-btn" data-settings="company">
                <span>🏢</span>
                Company
            </button>
            <button class="settings-nav-btn" data-settings="users">
                <span>👥</span>
                Users & Roles
            </button>
            <button class="settings-nav-btn" data-settings="payroll">
                <span>💰</span>
                Payroll
            </button>
            <button class="settings-nav-btn" data-settings="attendance">
                <span>📅</span>
                Attendance
            </button>
            <button class="settings-nav-btn" data-settings="notifications">
                <span>🔔</span>
                Notifications
            </button>
            <button class="settings-nav-btn" data-settings="security">
                <span>🔒</span>
                Security
            </button>
            <button class="settings-nav-btn" data-settings="backup">
                <span>💾</span>
                Backup
            </button>
        </div>
        
            <!-- General Settings  -->
        <div class="settings-content" id="general-settings">
            <div class="settings-section">
                <h3>Application Settings</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="appName">Application Name</label>
                        <input type="text" id="appName" value="DreamHR" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="appVersion">Version</label>
                        <input type="text" id="appVersion" value="1.0.0" class="setting-input" readonly>
                    </div>
                    <div class="setting-item">
                        <label for="timezone">Default Timezone</label>
                        <select id="timezone" class="setting-select">
                            <option value="UTC">UTC</option>
                            <option value="America/New_York">Eastern Time</option>
                            <option value="America/Chicago">Central Time</option>
                            <option value="America/Denver">Mountain Time</option>
                            <option value="America/Los_Angeles" selected>Pacific Time</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="dateFormat">Date Format</label>
                        <select id="dateFormat" class="setting-select">
                            <option value="MM/DD/YYYY" selected>MM/DD/YYYY</option>
                            <option value="DD/MM/YYYY">DD/MM/YYYY</option>
                            <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="currency">Default Currency</label>
                        <select id="currency" class="setting-select">
                            <option value="USD" selected>USD ($)</option>
                            <option value="EUR">EUR (€)</option>
                            <option value="GBP">GBP (£)</option>
                            <option value="CAD">CAD (C$)</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="language">Language</label>
                        <select id="language" class="setting-select">
                            <option value="en" selected>English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Display Settings</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label class="setting-label">Theme</label>
                        <div class="radio-group">
                            <label class="radio-container">
                                <input type="radio" name="theme" value="light" checked>
                                <span class="radio-mark"></span>
                                Light
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="theme" value="dark">
                                <span class="radio-mark"></span>
                                Dark
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="theme" value="auto">
                                <span class="radio-mark"></span>
                                Auto
                            </label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label for="recordsPerPage">Records Per Page</label>
                        <select id="recordsPerPage" class="setting-select">
                            <option value="10">10</option>
                            <option value="25" selected>25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Company Settings  -->
        <div class="settings-content" id="company-settings" style="display: none;">
            <div class="settings-section">
                <h3>Company Information</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="companyName">Company Name</label>
                        <input type="text" id="companyName" value="Dream Corporation" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="companyEmail">Company Email</label>
                        <input type="email" id="companyEmail" value="info@dreamcorp.com" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="companyPhone">Company Phone</label>
                        <input type="tel" id="companyPhone" value="+1 (555) 123-4567" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="companyWebsite">Website</label>
                        <input type="url" id="companyWebsite" value="https://dreamcorp.com" class="setting-input">
                    </div>
                    <div class="setting-item full-width">
                        <label for="companyAddress">Company Address</label>
                        <textarea id="companyAddress" rows="3" class="setting-textarea">
                            123 Business Ave, Suite 100
                            San Francisco, CA 94105
                            United States</textarea>
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Business Settings</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="fiscalYearStart">Fiscal Year Start</label>
                        <select id="fiscalYearStart" class="setting-select">
                            <option value="01" selected>January</option>
                            <option value="04">April</option>
                            <option value="07">July</option>
                            <option value="10">October</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="workingDays">Working Days Per Week</label>
                        <select id="workingDays" class="setting-select">
                            <option value="5" selected>5 Days</option>
                            <option value="6">6 Days</option>
                            <option value="7">7 Days</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="workingHours">Working Hours Per Day</label>
                        <input type="number" id="workingHours" value="8" min="1" max="24" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="employeeIdPrefix">Employee ID Prefix</label>
                        <input type="text" id="employeeIdPrefix" value="EMP" class="setting-input">
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Users & Roles Settings  -->
        <div class="settings-content" id="users-settings" style="display: none;">
            <div class="settings-section">
                <h3>User Management</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label class="setting-label">User Registration</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="allowRegistration" checked>
                            <label for="allowRegistration" class="toggle-label">Allow new user registration</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Email Verification</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="requireEmailVerification" checked>
                            <label for="requireEmailVerification" class="toggle-label">Require email verification</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label for="defaultRole">Default Role for New Users</label>
                        <select id="defaultRole" class="setting-select">
                            <option value="employee" selected>Employee</option>
                            <option value="manager">Manager</option>
                            <option value="admin">Administrator</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="sessionTimeout">Session Timeout (minutes)</label>
                        <input type="number" id="sessionTimeout" value="60" min="5" max="480" class="setting-input">
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Role Permissions</h3>
                <div class="permissions-table">
                    <div class="permissions-header">
                        <span>Permission</span>
                        <span>Employee</span>
                        <span>Manager</span>
                        <span>Admin</span>
                    </div>
                    <div class="permission-row">
                        <span>View Employees</span>
                        <input type="checkbox" checked disabled>
                        <input type="checkbox" checked>
                        <input type="checkbox" checked>
                    </div>
                    <div class="permission-row">
                        <span>Add/Edit Employees</span>
                        <input type="checkbox" disabled>
                        <input type="checkbox" checked>
                        <input type="checkbox" checked>
                    </div>
                    <div class="permission-row">
                        <span>Delete Employees</span>
                        <input type="checkbox" disabled>
                        <input type="checkbox" disabled>
                        <input type="checkbox" checked>
                    </div>
                    <div class="permission-row">
                        <span>View Payroll</span>
                        <input type="checkbox" disabled>
                        <input type="checkbox" checked>
                        <input type="checkbox" checked>
                    </div>
                    <div class="permission-row">
                        <span>Process Payroll</span>
                        <input type="checkbox" disabled>
                        <input type="checkbox" disabled>
                        <input type="checkbox" checked>
                    </div>
                    <div class="permission-row">
                        <span>Generate Reports</span>
                        <input type="checkbox" disabled>
                        <input type="checkbox" checked>
                        <input type="checkbox" checked>
                    </div>
                    <div class="permission-row">
                        <span>System Settings</span>
                        <input type="checkbox" disabled>
                        <input type="checkbox" disabled>
                        <input type="checkbox" checked>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Payroll Settings  -->
        <div class="settings-content" id="payroll-settings" style="display: none;">
            <div class="settings-section">
                <h3>Payroll Configuration</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="payrollFrequency">Payroll Frequency</label>
                        <select id="payrollFrequency" class="setting-select">
                            <option value="weekly">Weekly</option>
                            <option value="biweekly">Bi-weekly</option>
                            <option value="monthly" selected>Monthly</option>
                            <option value="quarterly">Quarterly</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="payrollDay">Payroll Day</label>
                        <select id="payrollDay" class="setting-select">
                            <option value="1">1st of month</option>
                            <option value="15">15th of month</option>
                            <option value="last" selected>Last day of month</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="overtimeRate">Overtime Rate (%)</label>
                        <input type="number" id="overtimeRate" value="150" min="100" max="300" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="overtimeThreshold">Overtime Threshold (hours)</label>
                        <input type="number" id="overtimeThreshold" value="40" min="1" max="80" class="setting-input">
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Tax & Deductions</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="incomeTaxRate">Income Tax Rate (%)</label>
                        <input type="number" id="incomeTaxRate" value="20" min="0" max="50" step="0.1" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="socialSecurityRate">Social Security Rate (%)</label>
                        <input type="number" id="socialSecurityRate" value="6.2" min="0" max="15" step="0.1" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="medicareRate">Medicare Rate (%)</label>
                        <input type="number" id="medicareRate" value="1.45" min="0" max="5" step="0.01" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="providentFundRate">Provident Fund Rate (%)</label>
                        <input type="number" id="providentFundRate" value="12" min="0" max="25" step="0.1" class="setting-input">
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Attendance Settings  -->
        <div class="settings-content" id="attendance-settings" style="display: none;">
            <div class="settings-section">
                <h3>Attendance Rules</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="workStartTime">Work Start Time</label>
                        <input type="time" id="workStartTime" value="09:00" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="workEndTime">Work End Time</label>
                        <input type="time" id="workEndTime" value="17:00" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="lateThreshold">Late Threshold (minutes)</label>
                        <input type="number" id="lateThreshold" value="15" min="1" max="60" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="breakDuration">Break Duration (minutes)</label>
                        <input type="number" id="breakDuration" value="60" min="15" max="120" class="setting-input">
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Leave Policies</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="annualLeave">Annual Leave Days</label>
                        <input type="number" id="annualLeave" value="20" min="0" max="50" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="sickLeave">Sick Leave Days</label>
                        <input type="number" id="sickLeave" value="10" min="0" max="30" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="personalLeave">Personal Leave Days</label>
                        <input type="number" id="personalLeave" value="5" min="0" max="20" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Carry Forward Leave</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="carryForwardLeave" checked>
                            <label for="carryForwardLeave" class="toggle-label">Allow carry forward to next year</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Notification Settings  -->
        <div class="settings-content" id="notifications-settings" style="display: none;">
            <div class="settings-section">
                <h3>Email Notifications</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label class="setting-label">New Employee Registration</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="notifyNewEmployee" checked>
                            <label for="notifyNewEmployee" class="toggle-label">Send notification</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Payroll Processing</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="notifyPayroll" checked>
                            <label for="notifyPayroll" class="toggle-label">Send notification</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Leave Requests</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="notifyLeaveRequest" checked>
                            <label for="notifyLeaveRequest" class="toggle-label">Send notification</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Attendance Alerts</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="notifyAttendance" checked>
                            <label for="notifyAttendance" class="toggle-label">Send notification</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Email Configuration</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="smtpServer">SMTP Server</label>
                        <input type="text" id="smtpServer" value="smtp.gmail.com" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="smtpPort">SMTP Port</label>
                        <input type="number" id="smtpPort" value="587" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="smtpUsername">SMTP Username</label>
                        <input type="email" id="smtpUsername" value="noreply@dreamcorp.com" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="smtpPassword">SMTP Password</label>
                        <input type="password" id="smtpPassword" value="••••••••" class="setting-input">
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Security Settings  -->
        <div class="settings-content" id="security-settings" style="display: none;">
            <div class="settings-section">
                <h3>Password Policy</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label for="minPasswordLength">Minimum Password Length</label>
                        <input type="number" id="minPasswordLength" value="8" min="6" max="20" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Require Uppercase</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="requireUppercase" checked>
                            <label for="requireUppercase" class="toggle-label">Require uppercase letters</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Require Numbers</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="requireNumbers" checked>
                            <label for="requireNumbers" class="toggle-label">Require numbers</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Require Special Characters</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="requireSpecialChars" checked>
                            <label for="requireSpecialChars" class="toggle-label">Require special characters</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label for="passwordExpiry">Password Expiry (days)</label>
                        <input type="number" id="passwordExpiry" value="90" min="30" max="365" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="maxLoginAttempts">Max Login Attempts</label>
                        <input type="number" id="maxLoginAttempts" value="5" min="3" max="10" class="setting-input">
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Two-Factor Authentication</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label class="setting-label">Enable 2FA</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="enable2FA">
                            <label for="enable2FA" class="toggle-label">Enable two-factor authentication</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label class="setting-label">Require 2FA for Admins</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="require2FAAdmin" checked>
                            <label for="require2FAAdmin" class="toggle-label">Require 2FA for administrators</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Backup Settings  -->
        <div class="settings-content" id="backup-settings" style="display: none;">
            <div class="settings-section">
                <h3>Backup Configuration</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <label class="setting-label">Automatic Backups</label>
                        <div class="toggle-switch">
                            <input type="checkbox" id="autoBackup" checked>
                            <label for="autoBackup" class="toggle-label">Enable automatic backups</label>
                        </div>
                    </div>
                    <div class="setting-item">
                        <label for="backupFrequency">Backup Frequency</label>
                        <select id="backupFrequency" class="setting-select">
                            <option value="daily" selected>Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                        </select>
                    </div>
                    <div class="setting-item">
                        <label for="backupTime">Backup Time</label>
                        <input type="time" id="backupTime" value="02:00" class="setting-input">
                    </div>
                    <div class="setting-item">
                        <label for="retentionPeriod">Retention Period (days)</label>
                        <input type="number" id="retentionPeriod" value="30" min="7" max="365" class="setting-input">
                    </div>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Backup Actions</h3>
                <div class="backup-actions">
                    <button class="btn btn-primary" id="createBackupBtn">
                        <span>💾</span>
                        Create Backup Now
                    </button>
                    <button class="btn btn-secondary" id="restoreBackupBtn">
                        <span>🔄</span>
                        Restore from Backup
                    </button>
                    <button class="btn btn-secondary" id="downloadBackupBtn">
                        <span>📥</span>
                        Download Latest Backup
                    </button>
                </div>
            </div>
            
            <div class="settings-section">
                <h3>Recent Backups</h3>
                <div class="backup-list">
                    <div class="backup-item">
                        <div class="backup-info">
                            <span class="backup-name">Full Backup - March 15, 2024</span>
                            <span class="backup-size">245 MB</span>
                            <span class="backup-status success">Completed</span>
                        </div>
                        <div class="backup-actions">
                            <button class="btn-icon" title="Download">📥</button>
                            <button class="btn-icon" title="Restore">🔄</button>
                            <button class="btn-icon" title="Delete">🗑️</button>
                        </div>
                    </div>
                    <div class="backup-item">
                        <div class="backup-info">
                            <span class="backup-name">Full Backup - March 14, 2024</span>
                            <span class="backup-size">243 MB</span>
                            <span class="backup-status success">Completed</span>
                        </div>
                        <div class="backup-actions">
                            <button class="btn-icon" title="Download">📥</button>
                            <button class="btn-icon" title="Restore">🔄</button>
                            <button class="btn-icon" title="Delete">🗑️</button>
                        </div>
                    </div>
                    <div class="backup-item">
                        <div class="backup-info">
                            <span class="backup-name">Full Backup - March 13, 2024</span>
                            <span class="backup-size">241 MB</span>
                            <span class="backup-status success">Completed</span>
                        </div>
                        <div class="backup-actions">
                            <button class="btn-icon" title="Download">📥</button>
                            <button class="btn-icon" title="Restore">🔄</button>
                            <button class="btn-icon" title="Delete">🗑️</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   </main>
</div>
<?php require_once('layouts/footer.php') ?>