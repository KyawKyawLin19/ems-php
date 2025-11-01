<?php 
require_once("Asset.php");
$assetObj = new Asset();
$assets = $assetObj->getAllAsset();
//die(var_dump(count($assets)));

if(!empty($_GET['pageno'])){
    $pageno = $_GET['pageno'];
}else{
    $pageno =1;
}
$no_offrecs = 2;
$offset = ($pageno-1)* $no_offrecs;

$asset_type = $_GET['asset_type'] ?? 'all_types';

$asset_name = $_GET['assets_name'] ?? null;
// die(var_dump($asset_name));

if($asset_type != 'all_types' && $asset_name != null){
    $filter_pagination = $assetObj->filter_pagination($offset, $no_offrecs,$asset_type,$asset_name);
    $asset_filter = $assetObj->filter_asset($asset_type,$asset_name);
    $total_pages = ceil(count($asset_filter) / $no_offrecs);
}elseif($asset_type != 'all_types' || $asset_name != null){
    $filter_pagination = $assetObj->filter_pagination($offset, $no_offrecs,$asset_type,$asset_name);
    $asset_filter = $assetObj->filter_asset($asset_type,$asset_name);
    $total_pages = ceil(count($asset_filter) / $no_offrecs);
}else{
    $filter_pagination = $assetObj->pagination_asset($offset, $no_offrecs);
    $total_pages = ceil(count($assets) / $no_offrecs);
}


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
            <form method="GET" action="" >
                <div class="employee-filters">
                    <input type="text" placeholder="Search assets..." class="search-input" id="employeeSearch" name="assets_name" oninput="this.form.submit()">
                    <select class="filter-select" id="departmentFilter" name="asset_type" onchange="this.form.submit()">
                        <option value="all_types" <?=  $asset_type =='all_types' ? 'selected' : '' ?>>All Types</option>
                        <option value="laptop" <?=  $asset_type =='laptop' ? 'selected' : '' ?> >Laptop</option>
                        <option value="desktop" <?=  $asset_type =='desktop' ? 'selected' : '' ?>>Desktop</option>
                        <option value="monitor" <?=  $asset_type =='monitor' ? 'selected' : '' ?>>Monitor</option>
                        <option value="printer" <?=  $asset_type =='printer' ? 'selected' : '' ?>>Printer</option>
                        <option value="phone" <?=  $asset_type =='phone' ? 'selected' : '' ?>>Phone</option>
                        <option value="tablet" <?=  $asset_type =='tablet' ? 'selected' : '' ?>>Tablet</option>
                        <option value="other" <?=  $asset_type =='other' ? 'selected' : '' ?>>Other</option>
                    </select>
                </div>
            </form>

            <?php
            
            ?>

            <div class="employee-grid" id="employeeGrid">
                <?php foreach ($filter_pagination as $asset):?>
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

            <!-- Added pagination section at bottom of employee section -->
            <div class="pagination-container" id="paginationContainer">
                <div class="pagination-info">
                    <span id="paginationInfo">Showing 1-2 of 
                        <?php if($asset_type != 'all_types' || $asset_name != null){
                            echo count($asset_filter);
                        }else{
                            echo count($assets);} ?> assets</span>
                </div>
                <div class="pagination-controls">
                    <button  class="pagination-btn" <?php if($pageno == 1){echo "disabled";} ?>>
                        <a href="?pageno=1&asset_type=<?= urlencode($asset_type)?>" >First</a>
                    </button>
                    <button class="pagination-btn" id="prevBtn" 
                    <?php if($pageno <= 1){echo "disabled";} ?>>
                        <a href="<?php echo ($pageno <= 1) ? '#' : '?pageno=' . ($pageno - 1) . '&asset_type=' . urlencode($asset_type); ?>">←Previous</a>
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
                        <a href="?pageno=<?= $i ?>&asset_type=<?= urlencode($asset_type) ?>"><?= $i ?></a>
                    </div>

                    <?php endfor; ?>
                    
                    <button class="pagination-btn" id="nextBtn"
                        <?php if($pageno == $total_pages){echo "disabled";} ?>>
                        <a href="<?php echo ($pageno < 1) ? '#' : '?pageno=' . ($pageno + 1). '&asset_type=' . urlencode($asset_type);; ?>">Next→</a>
                    </button>
                    <button class="pagination-numbers pagination-btn" id="paginationNumbers"
                        <?php if($pageno == $total_pages){echo "disabled";} ?>>
                        <a href="?pageno=<?=$total_pages?>&asset_type=<?= urlencode($asset_type) ?>">Last</a>
                    </button>
                </div>
            </div>
        </section>
    </main>
</div>

<?php require_once('layouts/footer.php') ?>