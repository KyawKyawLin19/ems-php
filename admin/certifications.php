<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>
  
    <!-- Certification Section -->
    <section id="certification-section" class="content-section">
        <div class="section-header">
            <h2>Certification Management</h2>
        </div>
        <div class="certifications-grid">
            <div class="certification-card">
                <div class="cert-icon">🏆</div>
                <h3>AWS Solutions Architect</h3>
                <p>John Smith - IT Department</p>
                <div class="cert-details">
                    <span>Issued: Jan 2024</span>
                    <span>Expires: Jan 2027</span>
                </div>
                    <!-- Changed status from valid to pending and added approve button  -->
                <span class="cert-status pending">Pending</span>
                <div class="cert-actions">
                    <button class="btn btn-approve-cert" onclick="approveCertification(this)">
                        <span>✓</span> Approve
                    </button>
                </div>
            </div>
            <div class="certification-card">
                <div class="cert-icon">📜</div>
                <h3>Project Management Professional</h3>
                <p>Sarah Wilson - HR Department</p>
                <div class="cert-details">
                    <span>Issued: Dec 2023</span>
                    <span>Expires: Dec 2026</span>
                </div>
                    <!-- Changed status from valid to pending and added approve button  -->
                <span class="cert-status pending">Pending</span>
                <div class="cert-actions">
                    <button class="btn btn-approve-cert" onclick="approveCertification(this)">
                        <span>✓</span> Approve
                    </button>
                </div>
            </div>
        </div>
    </section>
    </main>
</div>
<?php require_once('layouts/footer.php') ?>