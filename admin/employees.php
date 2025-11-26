<?php
require_once('Employee.php');

$employeeObj = new Employee();
$employees = $employeeObj->getAllEmployees();

if(!empty($_GET['pageno'])){
    $pageno = $_GET['pageno'];
}else{
    $pageno =1;
}
$no_offrecs = 4;
$offset = ($pageno-1)* $no_offrecs;

$emp_name = $_GET['employee_name'] ?? null;
$dep_name = $_GET['department_name'] ?? null;

// die(var_dump($dep_name));

// if($dep_name != null && $emp_name != null){
//     $filter_pagination = $employeeObj->two_filter_pagination($offset, $no_offrecs,$dep_name,$emp_name);
//     $employee_filter = $employeeObj->filter_employee($dep_name,$emp_name);
//     $total_pages = ceil(count($employee_filter) / $no_offrecs);
// }elseif($dep_name != 'all_departments' || $emp_name != null){
//     $filter_pagination = $employeeObj->one_filter_pagination($offset, $no_offrecs,$dep_name,$emp_name);
//     $employee_filter = $employeeObj->filter_employee($dep_name,$emp_name);
//     $total_pages = ceil(count($employee_filter) / $no_offrecs);
// }else{
//     $filter_pagination = $employeeObj->pagination_employee($offset, $no_offrecs);
//     $total_pages = ceil(count($employees) / $no_offrecs);
// }

$filter_pagination= $employeeObj->filter_pagination($offset, $no_offrecs)

?>
<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
        <!-- Employees Section  -->
        <section id="employees-section" class="content-section active" >
            <div class="section-header">
                <h2>Employee Management</h2>
                <a href="employee_add.php" class="btn btn-primary" id="addEmployeeBtn">
                    <span>?</span>
                    Add Employee
                </a>
            </div>

            

            <?php if($employees): ?>
                <form method="GET" action="" >
                <div class="employee-filters">
                    <input type="text" placeholder="Search employees..." class="search-input" id="employeeSearch" name="employee_name">
                    <select class="filter-select" id="departmentFilter" name="department_name" onchange="this.form.submit()">
                        <option value="all" <?=  $dep_name == null ? 'selected' : ''?>>All Departments</option>
                        <option value=1 <?=  $dep_name =='1' ? 'selected' : ''?>>Information Technology</option>
                        <option value=2 <?=  $dep_name =='2' ? 'selected' : ''?>>Marketing</option>
                        <option value=3 <?=  $dep_name =='3' ? 'selected' : ''?>>Human Resources</option>
                        <option value=4 <?=  $dep_name =='4' ? 'selected' : ''?>>Finance</option>
                        <option value=5 <?=  $dep_name =='5' ? 'selected' : ''?>>Sales</option>
                        <option value=6 <?=  $dep_name =='6' ? 'selected' : ''?>>Operations</option>
                    </select>
                </div>
                </form>
                <div class="employee-grid" id="employeeGrid">
                    <!-- Employee cards will be populated by JavaScript  -->
                
                    <?php foreach ($filter_pagination as $employee): ?>
                        <a  href="employee_details.php?id=<?= escape($employee->id)?>" class="employee-card"  data-department="it">
                            <div class="employee-header">
                            <div class="employee-avatar">MC</div>
                            <div class="employee-info">
                                <h4><?php escape(ucwords($employee->name)) ?></h4>
                                <p>Software Developer</p>
                            </div>
                            </div>
                            <div class="employee-details">
                            <div class="employee-detail">
                                <?php $department_name = $employeeObj->getDepartmentName($employee->department_id); ?><span>Department:</span>
                                <span><?php escape($department_name)  ?></span>
                            </div>
                            <div class="employee-detail">
                                <span>Email:</span>
                                <span><?php escape($employee->email) ?></span>
                            </div>
                            <div class="employee-detail">
                                <span>Phone:</span>
                                <span><?php escape($employee->phone) ?></span>
                            </div>
                            <div class="employee-detail">
                                <span>Status:</span>
                                <?php if($employee->is_terminated): ?>
                                    <span class="employee-status terminate">
                                        <?= "Terminated" ?>
                                    </span>
                                <?php else: ?>
                                    <span class="employee-status <?= escape($employee->employment_status) ?>">
                                        <?= escape(ucwords(str_replace('_', ' ', $employee->employment_status))) ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    
                </div>
                    <!-- Added pagination section at bottom of employee section -->
                <div class="pagination-container" id="paginationContainer">
                    <div class="pagination-info">
                        <span id="paginationInfo">Showing 1-4 of 12 employees</span>
                    </div>
                    <div class="pagination-controls">
                        <button class="pagination-btn" id="prevBtn" disabled>
                            <?php if($pageno <= 1) ?>
                                <a style="text-decoration: none;" href="<?php echo ($pageno <= 1) ? '#' : '?pageno=' . ($pageno - 1) ; ?>">←Previous</a>
                        </button>

                        <?php 
                    if ($pageno <= 2) {
                        $start = 1;
                        $end = min(3, $total_pages);
                    } elseif ($pageno <= $total_pages - 1) {
                        $start = $pageno - 1;
                        $end = $pageno + 1;
                    } else {
                        $start = max(1, $total_pages - 2);
                        $end = $total_pages;
                    }

                    for ($i = $start; $i <= $end; $i++): ?>
                        <div class="pagination-numbers pagination-btn" id="paginationNumbers">
                            <a href="?pageno=<?= $i ?>"><?= $i ?></a>
                        </div>
                    <?php endfor; ?>
                        <button class="pagination-btn" id="nextBtn">
                            <?php if($pageno == $total_pages) ?>
                               <a style="text-decoration: none;" href="<?php echo ($pageno < 1) ? '#' : '?pageno=' . ($pageno + 1); ?>">Next→</a>
                        </button>
                    </div>
                </div>
            <?php else: ?>
                <p>No employees found.</p>
            <?php endif; ?>
        </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>

