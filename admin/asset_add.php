<?php 
require_once("Asset.php");
if(isset($_POST['submit'])){
    $assetObj = new Asset();
    //die(var_dump($_POST));
    $asset_add = $assetObj->addAsset($_POST);
    if ($asset_add) {
        echo "<script>window.location.href='assets.php';</script>";
    }
}

?>

<?php require_once('layouts/master.php') ?>
    <div>
        <div>
            <div>
                <h3>Add New Asset</h3>
            </div>
            <form method="POST" action="" id="addAssetForm">
                <div class="form-group">
                    <label for="assetName">Asset Name</label>
                    <input type="text" id="assetName" name="assets_name" required>
                </div>
                <div class="form-group">
                    <label for="assetType">Asset Type</label>
                    <select id="assetType" name="asset_type" required>
                        <option value="">Select Type</option>
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
                    <input type="text" id="assetBrand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="assetModel">Model</label>
                    <input type="text" id="assetModel" name="model" required>
                </div>
                <div class="form-group">
                    <label for="assetSerial">Serial Number</label>
                    <input type="text" id="assetSerial" name="serial_number" required>
                </div>
                <div class="form-group">
                    <label for="assetPurchaseDate">Purchase Date</label>
                    <input type="date" id="assetPurchaseDate" name="purchase_date" required>
                </div>
                <div class="form-group">
                    <label for="assetPurchasePrice">Purchase Price</label>
                    <input type="number" id="assetPurchasePrice" name="purchase_price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="ExpireDate">Warranty Expire Date</label>
                    <input type="date" id="ExpireDate" name="warranty_expires" required>
                </div>
                <div class="form-group">
                    <label for="assetNotes">Notes</label>
                    <textarea id="assetNotes" name="notes" rows="3" placeholder="Additional notes about the asset"></textarea>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='assets.php'">Cancel</button>
                    <button name="submit" type="submit" class="btn btn-primary">Add Asset</button>
                </div>
            </form>
        </div>
    </div>

    </main>
</div>
<?php require_once('layouts/footer.php') ?>