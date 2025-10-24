<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
    
    <!-- Holidays Section -->
    <section id="holidays-section" class="content-section">
        <div class="section-header">
            <h2>Holiday Management</h2>
            <button class="btn btn-primary" id="addHolidayBtn">
                <span>➕</span>
                Add Holiday
            </button>
        </div>
        <div class="holidays-calendar">
            <div class="holiday-item">
                <div class="holiday-date">
                    <span class="month">Jan</span>
                    <span class="day">01</span>
                </div>
                <div class="holiday-info">
                    <h3>New Year's Day</h3>
                    <p>Public Holiday</p>
                </div>
            </div>
            <div class="holiday-item">
                <div class="holiday-date">
                    <span class="month">Jul</span>
                    <span class="day">04</span>
                </div>
                <div class="holiday-info">
                    <h3>Independence Day</h3>
                    <p>Public Holiday</p>
                </div>
            </div>
            <div class="holiday-item">
                <div class="holiday-date">
                    <span class="month">Dec</span>
                    <span class="day">25</span>
                </div>
                <div class="holiday-info">
                    <h3>Christmas Day</h3>
                    <p>Public Holiday</p>
                </div>
            </div>
        </div>
    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>