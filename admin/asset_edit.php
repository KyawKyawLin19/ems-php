<?php
require_once("Asset.php");
if(isset($_GET['id'])){
    $assetObj = new Asset();
    $assets = $assetObj->getAssetById($_GET['id']);
    $asset_detail= $assets[0];
    //die(var_dump($asset_detail));
}

if(isset($_POST['submit'])){
    //die(var_dump($_POST));
    $assetObj = new Asset();
    $asset_update = $assetObj->updateAsset($_POST);
    $id = $_POST['id'];
    //die(var_dump($id));
    if($asset_update){
        header("Location: asset_details.php?id=$id");;
    }
}
?>

<?php require_once('layouts/master.php') ?>
<?php require_once('layouts/sidebar.php') ?>

<div class="edit-employee-container">
    <h2>✏️ Edit Asset</h2>
    <form action="asset_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $asset_detail['id'] ?>">

        <div class="edit-form-grid">
            <div class="form-group">
                    <label for="assetName">Asset Name</label>
                    <input type="text" id="assetName" name="assets_name" value="<?php if(isset($asset_detail['assets_name'])){echo $asset_detail['assets_name'];} ?>" required>
            </div>
            <div class="form-group">
                <label for="assetType">Asset Type</label>
                <?php $asset_type = $asset_detail['asset_type']; ?>
                <select id="assetType" name="asset_type"  required>
                    <option value="laptop" <?php if($asset_type === "laptop"){echo "selected";}?>>Laptop</option>
                    <option value="desktop" <?php if($asset_type === "desktop"){echo "selected";}?>>Desktop</option>
                    <option value="monitor" <?php if($asset_type === "monitor"){echo "selected";}?>>Monitor</option>
                    <option value="printer" <?php if($asset_type === "printer"){echo "selected";}?>>Printer</option>
                    <option value="phone" <?php if($asset_type === "phone"){echo "selected";}?>>Phone</option>
                    <option value="tablet" <?php if($asset_type === "tablet"){echo "selected";}?>>Tablet</option>
                    <option value="other" <?php if($asset_type === "other"){echo "selected";}?>>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="assetBrand">Brand</label>
                <input type="text" id="assetBrand" name="brand" value="<?php if(isset($asset_detail['brand'])){echo $asset_detail['brand'];} ?>" required>
            </div>
            <div class="form-group">
                <label for="assetModel">Model</label>
                <input type="text" id="assetModel" name="model" value="<?php if(isset($asset_detail['model'])){echo $asset_detail['model'];} ?>" required>
            </div>
            <div class="form-group">
                <label for="assetSerial">Serial Number</label>
                <input type="text" id="assetSerial" name="serial_number" value="<?php if(isset($asset_detail['serial_number'])){echo $asset_detail['serial_number'];} ?>" required>
            </div>
            <div class="form-group">
                <label for="assetPurchaseDate">Purchase Date</label>
                <input type="date" id="assetPurchaseDate" name="purchase_date" value="<?php if(isset($asset_detail['purchase_date'])){echo $asset_detail['purchase_date'];} ?>" required>
            </div>
            <div class="form-group">
                <label for="assetPurchasePrice">Purchase Price</label>
                <input type="number" id="assetPurchasePrice" name="purchase_price" step="0.01" value="<?php if(isset($asset_detail['purchase_price'])){echo $asset_detail['purchase_price'];} ?>" required>
            </div>
            <div class="form-group">
                <label for="ExpireDate">Warranty Expire Date</label>
                <input type="date" id="ExpireDate" name="warranty_expires" value="<?php if(isset($asset_detail['warranty_expires'])){echo $asset_detail['warranty_expires'];} ?>" required>
            </div>
            <div class="form-group">
                <label for="assetAssignedTo">Assigned To</label>
                <input id="assetAssignedTo"  name="employee_id" value="<?php if(isset($asset_detail['employee_id'])){echo $asset_detail['employee_id'];} ?>">
            </div>
            <div class="form-group">
                <label for="assignDate">Assign Date</label>
                <input type="date" id="assignDate" name="assign_date" value="<?php if(isset($asset_detail['assign_date'])){echo $asset_detail['assign_date'];} ?>">
            </div>
            <div class="form-group">
                <label for="assignDate">Return Date</label>
                <input type="date" id="assignDate" name="return_date" value="<?php if(isset($asset_detail['return_date'])){echo $asset_detail['return_date'];} ?>">
            </div>
            <div class="form-group">
                <label for="assetStatus">Asset Status</label>
                <?php $asset_status = $asset_detail['asset_status']; ?>
                <select id="assetStatus" name="asset_status" required>
                    <option value="assigned" <?php if($asset_status === "assigned"){echo "selected";}?>>Assigned</option>
                    <option value="unassigned" <?php if($asset_status === "unassigned"){echo "selected";}?>>Unassigned</option>
                    <option value="maintenance" <?php if($asset_status === "maintenance"){echo "selected";}?>>Maintenance</option>
                    <option value="retired" <?php if($asset_status === "retired"){echo "selected";}?>>Retired</option>
                </select>
            </div>
            <div class="form-group">
                <label for="conditionStatus">Condition Status</label>
                <?php $condition_status = $asset_detail['condition_status']; ?>
                <select id="conditionStatu" name="condition_status" required>
                    <option value="new" <?php if($condition_status === "new"){echo "selected";}?>>New</option>
                    <option value="good" <?php if($condition_status === "good"){echo "selected";}?>>Good</option>
                    <option value="fair" <?php if($condition_status === "fair"){echo "selected";}?>>Fair</option>
                    <option value="poor" <?php if($condition_status === "poor"){echo "selected";}?>>Poor</option>
                    <option value="damaged" <?php if($condition_status === "damaged"){echo "selected";}?>>Damaged</option>
                </select>
            </div>
            <div class="form-group">
                <label for="assetNotes">Notes</label>
                <textarea id="assetNotes" name="notes" rows="3"><?php if(isset($asset_detail['notes'])){echo $asset_detail['notes'];}?></textarea>
            </div>
        </div>
      

        <div class="employee-edit-actions">
            <button name="submit" type="submit" class="btn btn-primary">💾 Save Changes</button>
            <button class="btn btn-secondary">⬅️ Cancel</button>
        </div>
        
    </form>
</div>


<?php require_once('layouts/footer.php') ?>