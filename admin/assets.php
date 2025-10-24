<?php 
require_once("Asset.php");
$assetObj = new Asset();
$assets = $assetObj->getAllAsset();




?>

<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

        <section id="assets-section" class="content-section">
            <div class="section-header">
                <h2>Asset Management</h2>
                <a href="asset_add.php" class="btn btn-primary" id="addAssetBtn">
                    <span>➕</span>
                    Add Asset
                </a>
            </div>
            <div class="employee-grid" id="employeeGrid">
                <?php foreach ($assets as $asset):?>
                    <a href="asset_details.php?id=<?= $asset['id']?>" class="employee-card"  data-department="it">
                        <div class="employee-header">
                        <div class="employee-avatar">AS</div>
                        <div class="employee-info">
                            <h4><?= $asset['asset_type'] ?></h4>
                            <p><?= $asset['assets_name'] ?></p>
                        </div>
                        </div>
                        <div class="employee-details">
                        <div class="employee-detail">
                            <span>Brand:</span>
                            <span><?= $asset['brand'] ?></span>
                        </div>
                        <div class="employee-detail">
                            <span>Model:</span>
                            <span><?= $asset['model'] ?></span>
                        </div>
                        <div class="employee-detail">
                            <span>Serial Number:</span>
                            <span><?= $asset['serial_number'] ?></span>
                        </div>
                        <div class="employee-detail">
                            <span>Asset Status:</span>
                            <span><?= $asset['asset_status'] ?></span>
                        </div>
                        <div class="employee-detail">
                            <span>Condition Status:</span>
                            <span><?= $asset['condition_status'] ?></span>
                        </div>
                </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>