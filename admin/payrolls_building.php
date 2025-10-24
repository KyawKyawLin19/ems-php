<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

    <section id="payroll-section" class="content-section">
        <div class="section-header">
            <h2>Payroll Management</h2>
            <div class="header-actions">
                <button class="btn btn-secondary" id="exportPayrollBtn">
                    <span>📊</span>
                    Export Report
                </button>
                <button class="btn btn-primary" id="processPayrollBtn">
                    <span>💰</span>
                    Process Payroll
                </button>
            </div>
        </div>
        
        <div class="payroll-tabs">
            <a href="payrolls.php" class="tab-btn" data-tab="overview">
                <span>📊</span>
                Overview
            </a>
            <a href="payrolls_employee.php" class="tab-btn" data-tab="employee-payroll">
                <span>👤</span>
                Employee Payroll
            </a>
            <a href="payrolls_department.php" class="tab-btn" data-tab="department-payroll">
                <span>🏢</span>
                Department Payroll
            </a>
            <button class="tab-btn active" data-tab="building-reports">
                <span>🏗️</span>
                Building Reports
            </button>
        </div>

        <div class="tab-content active" id="building-reports-tab">
            <div class="building-reports-header">
                <h3>Organization-wide Payroll Reports</h3>
                <div class="payroll-actions">
                    <button class="btn btn-secondary" id="scheduleReportBtn">
                        <span>⏰</span>
                        Schedule Report
                    </button>
                    <button class="btn btn-primary" id="generateBuildingReportBtn">
                        <span>📊</span>
                        Generate Report
                    </button>
                </div>
            </div>

            <div class="building-overview-stats">
                <div class="building-stat-card">
                    <div class="building-icon">🏗️</div>
                    <div class="building-info">
                        <h4>Total Organization Payroll</h4>
                        <p class="building-number">$485,600</p>
                        <span class="building-change">Current month</span>
                    </div>
                </div>
                <div class="building-stat-card">
                    <div class="building-icon">👥</div>
                    <div class="building-info">
                        <h4>Total Employees</h4>
                        <p class="building-number">142</p>
                        <span class="building-change">Across all departments</span>
                    </div>
                </div>
                <div class="building-stat-card">
                    <div class="building-icon">💼</div>
                    <div class="building-info">
                        <h4>Payroll Growth</h4>
                        <p class="building-number">+8.2%</p>
                        <span class="building-change positive">Year over year</span>
                    </div>
                </div>
                <div class="building-stat-card">
                    <div class="building-icon">💰</div>
                    <div class="building-info">
                        <h4>Annual Projection</h4>
                        <p class="building-number">$5.8M</p>
                        <span class="building-change">Based on current trends</span>
                    </div>
                </div>
            </div>

            <div class="building-reports-grid">
                <div class="report-section">
                    <h4>Executive Summary</h4>
                    <div class="executive-summary">
                        <div class="summary-metric">
                            <span class="metric-label">Total Annual Cost:</span>
                            <span class="metric-value">$5,827,200</span>
                        </div>
                        <div class="summary-metric">
                            <span class="metric-label">Average Employee Cost:</span>
                            <span class="metric-value">$41,050</span>
                        </div>
                        <div class="summary-metric">
                            <span class="metric-label">Highest Department:</span>
                            <span class="metric-value">IT ($125,400/month)</span>
                        </div>
                        <div class="summary-metric">
                            <span class="metric-label">Budget Efficiency:</span>
                            <span class="metric-value positive">89.2%</span>
                        </div>
                    </div>
                </div>

                <div class="report-section">
                    <h4>Payroll Breakdown</h4>
                    <div class="payroll-breakdown-chart">
                        <canvas id="buildingPayrollBreakdownChart" width="400" height="300"></canvas>
                    </div>
                </div>

                <div class="report-section">
                    <h4>Historical Trends</h4>
                    <div class="historical-trends-chart">
                        <canvas id="historicalTrendsChart" width="600" height="300"></canvas>
                    </div>
                </div>

                <div class="report-section">
                    <h4>Cost Analysis</h4>
                    <div class="cost-analysis">
                        <div class="cost-item">
                            <span class="cost-label">Base Salaries:</span>
                            <span class="cost-value">$420,000 (86.5%)</span>
                            <div class="cost-bar">
                                <div class="cost-fill" style="width: 86.5%"></div>
                            </div>
                        </div>
                        <div class="cost-item">
                            <span class="cost-label">Benefits & Allowances:</span>
                            <span class="cost-value">$45,600 (9.4%)</span>
                            <div class="cost-bar">
                                <div class="cost-fill" style="width: 9.4%"></div>
                            </div>
                        </div>
                        <div class="cost-item">
                            <span class="cost-label">Bonuses:</span>
                            <span class="cost-value">$15,000 (3.1%)</span>
                            <div class="cost-bar">
                                <div class="cost-fill" style="width: 3.1%"></div>
                            </div>
                        </div>
                        <div class="cost-item">
                            <span class="cost-label">Overtime:</span>
                            <span class="cost-value">$5,000 (1.0%)</span>
                            <div class="cost-bar">
                                <div class="cost-fill" style="width: 1.0%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="report-section">
                    <h4>Compliance & Audit</h4>
                    <div class="compliance-status">
                        <div class="compliance-item">
                            <span class="compliance-icon">✅</span>
                            <span class="compliance-text">Tax Compliance: Up to date</span>
                        </div>
                        <div class="compliance-item">
                            <span class="compliance-icon">✅</span>
                            <span class="compliance-text">Labor Law: Compliant</span>
                        </div>
                        <div class="compliance-item">
                            <span class="compliance-icon">⚠️</span>
                            <span class="compliance-text">Audit Review: Due in 30 days</span>
                        </div>
                        <div class="compliance-item">
                            <span class="compliance-icon">✅</span>
                            <span class="compliance-text">Benefits Administration: Current</span>
                        </div>
                    </div>
                </div>

                <div class="report-section">
                    <h4>Recommendations</h4>
                    <div class="recommendations">
                        <div class="recommendation-item">
                            <span class="rec-priority high">High</span>
                            <span class="rec-text">Review IT department salary structure for market competitiveness</span>
                        </div>
                        <div class="recommendation-item">
                            <span class="rec-priority medium">Medium</span>
                            <span class="rec-text">Implement performance-based bonus structure for Sales team</span>
                        </div>
                        <div class="recommendation-item">
                            <span class="rec-priority low">Low</span>
                            <span class="rec-text">Consider cost-of-living adjustments for next fiscal year</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>