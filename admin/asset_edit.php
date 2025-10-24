<?php
require_once("Asset.php");
if(isset($_GET['id'])){
    $assetObj = new Asset();
    $assets = $assetObj->getAssetById($_GET['id']);
    $asset_detail= $assets[0];
}

if(isset($_POST['submit'])){
    //die(var_dump($_POST));
    $assetObj = new Asset();
    $asset_update = $assetObj->updateAsset($_POST);
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
                <select id="assetType" name="asset_type"  required>
                    <option value=""><?php if(isset($asset_detail['asset_type'])){echo $asset_detail['asset_type'];} ?></option>
                    <option value="1">Laptop</option>
                    <option value="2">Desktop</option>
                    <option value="3">Monitor</option>
                    <option value="4">Printer</option>
                    <option value="5">Phone</option>
                    <option value="6">Tablet</option>
                    <option value="7">Other</option>
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
                <select id="assetStatus" name="asset_status" required>
                    <option value=""><?php if(isset($asset_detail['asset_status'])){echo $asset_detail['asset_status'];} ?></option>
                    <option value="1">Assigned</option>
                    <option value="2">Unassigned</option>
                    <option value="3">Maintenance</option>
                    <option value="4">Retired</option>
                </select>
            </div>
            <div class="form-group">
                <label for="conditionStatus">Condition Status</label>
                <select id="conditionStatu" name="condition_status" required>
                    <option value=""><?php if(isset($asset_detail['condition_status'])){echo $asset_detail['condition_status'];} ?></option>
                    <option value="1">New</option>
                    <option value="2">Good</option>
                    <option value="3">Fair</option>
                    <option value="4">Poor</option>
                    <option value="4">Damaged</option>
                </select>
            </div>
            <div class="form-group">
                <label for="assetNotes">Notes</label>
                <textarea id="assetNotes" name="notes" rows="3" 
                           value="<?php if(isset($asset_detail['notes'])){echo $asset_detail['notes'];} ?>"></textarea>
            </div>
        </div>
      

        <div class="employee-edit-actions">
            <a href="asset_details.php?id=<?= $asset_detail['id'] ?>" name="submit" type="submit" class="btn btn-primary">💾 Save Changes</a>
            <a href="asset_details.php?id=<?= $asset_detail['id'] ?>" class="btn btn-secondary">⬅️ Cancel</a>
        </div>
        
    </form>
</div>


<?php require_once('layouts/footer.php') ?>