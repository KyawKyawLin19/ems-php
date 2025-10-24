<?php

require_once("Asset.php");
if(isset($_GET['id'])){
    
    $assetObj = new Asset();
    $assets = $assetObj->getAssetById($_GET['id']);
    $asset_detail= $assets[0];
    //die(var_dump($asset_detail));

}

if(isset($_POST['delete'])){
    $asset_delete = $assetObj->deleteasset($_GET['id']);
    echo "<script>window.location.href='assets.php';</script>";
}

?>

<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

<div id="employeeDetailModal" class="active" >
        <div class="employee-detail-content">
                <div>
                    <h3>Asset Details</h3>
                </div>
            <div class="employee-detail-body">
                <div class="employee-profile-section">
                    <div class="employee-profile-avatar" id="detailEmployeeAvatar">AS</div>
                    <div class="employee-profile-info">
                        <h2 id="detailEmployeeName"><?= $asset_detail['asset_type'] ?></h2>
                        <p id="detailEmployeePosition"><?= $asset_detail['assets_name'] ?></p>
                        <span class="employee-status active" id="detailEmployeeStatus"><?= $asset_detail['asset_status']?></span>
                    </div>
                </div>
                
                <div class="employee-detail-grid">
                    <div class="detail-section">
                        <h4>Asset Information</h4>
                        <div class="detail-item">
                            <span class="detail-label">Brand:</span>
                            <span class="detail-value" id="detailFullName"><?= $asset_detail['brand']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Model:</span>
                            <span class="detail-value" id="detailEmail"><?= $asset_detail['model']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Serial Number:</span>
                            <span class="detail-value" id="detailPhone"><?= $asset_detail['serial_number']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Purchase Date:</span>
                            <span class="detail-value" id="detailAddress"><?= $asset_detail['purchase_date']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Purchase Price:</span>
                            <span class="detail-value" id="detailGender"><?= $asset_detail['purchase_price']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Warranty Expire Date:</span>
                            <span class="detail-value" id="detailDateOfBirth"><?= $asset_detail['warranty_expires']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Assign To:</span>
                            <span class="detail-value" id="detailGender"><?=$asset_detail['employee_id']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Assigned Date:</span>
                            <span class="detail-value" id="detailGender"><?= $asset_detail['assign_date']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Return Date:</span>
                            <span class="detail-value" id="detailGender"><?= $asset_detail['return_date']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Condition Status:</span>
                            <span class="detail-value" id="detailGender"><?= $asset_detail['condition_status']?></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Notes:</span>
                            <span class="detail-value" id="detailGender"><?= $asset_detail['notes']?></span>
                        </div>
                    </div>
                    
                </div>
                
                <form method="POST">
                    <div class="employee-actions">
                        <a type="edit" name="edit" class="btn btn-primary" id="editEmployeeBtn"
                                href="asset_edit.php?id=<?= $asset_detail['id'] ?>">
                            <span>✏️</span>
                            Edit Asset
                        </a>
                        <button type="delete" name="delete" class="btn btn-danger" id="deleteEmployeeBtn">
                            <span>🗑️</span>
                            Delete Asset
                        </button>
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='assets.php'">
                            Cancel</button>
                    </div>
                </form>
            </div>
            </div>
    </div>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>