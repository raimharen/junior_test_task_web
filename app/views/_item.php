<div class="row">
    <?php foreach ($items as $item) { ?>
        <div class="col-md m-3 p-4 border">
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
                    echo ("Dimension: <br>" . $item->furniture_dimension);
                }
                ?>
            </div>
        </div>
    <?php } ?>
</div>