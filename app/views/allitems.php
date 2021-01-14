<?php
require 'app/views/partials/head.php';
?>
<div class="row mt-5">
    <div class="col-7">
        <h1>Product List</h2>
    </div>
    <div class="col-2 d-flex align-items-center">
        <button type="button" class="btn btn-secondary">ADD</button>
    </div>
    <div class="col-2 d-flex align-items-center">
        <button type="button" class="btn btn-secondary">MASS DELETE</button>
    </div>
</div>

<div class="row">
    <?php foreach ($items as $item) { ?>
        <div class="col-sm"> <?= $item->sku ?></div>

    <?php } ?>
</div>
<?php
require 'app/views/partials/footer.php';
?>