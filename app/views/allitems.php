<?php
require 'app/views/partials/head.php';
?>
<div class="row mt-5">
    <div class="col-8">
        <h1>Product List</h2>
    </div>
    <div class="col-1 d-flex align-items-center justify-content-center">
        <button type="button" class="btn btn-secondary">ADD</button>
    </div>
    <div class="col-3 d-flex align-items-center justify-content-center">
        <button type="button" class="btn btn-secondary">MASS DELETE</button>
    </div>
</div>

<div class="row">
    <?php foreach ($items as $item) { ?>
        <div class="col-lg m-3 p-4 border">
            <input type="checkbox" id="<?= $item->sku ?>" name="<?= $item->sku ?>" value="<?= $item->type ?>">
            <div class="text-center">
                <div class=""><?= $item->sku ?></div>
            </div>
            <div class="text-center"><?= $item->name ?></div>
            <div class="text-center"><?= $item->price ?>$</div>
            <div class="text-center">
                <?php if ($item->type === "dvd") {
                    echo ("Size: " . $item->dvd_size . " MB");
                } elseif ($item->type === "book") {
                    echo ("Weight: " . $item->book_weight . " KG");
                } elseif ($item->type === "furniture") {
                    echo ("Dimension: <br>" . $item->furniture_width . "x" . $item->furniture_height . "x" . $item->furniture_depth);
                }
                ?>
            </div>
        </div>
    <?php } ?>
</div>

<?php
require 'app/views/partials/footer.php';
?>