<?php
require 'app/views/partials/head.php';
?>

<div class="row mt-5 border-bottom">
    <div class="col-8">
        <h1>Product List</h2>
    </div>
    <div class="col-1 d-flex align-items-center justify-content-center">
        <a href="new_item" class="btn btn-outline-dark" role="button">ADD</a>
    </div>
    <div class="col-3 d-flex align-items-center justify-content-center">
        <a href="/" class="btn btn-outline-dark" role="button" type="submit" onclick="delete_product()">MASS DELETE</a>
    </div>
</div>

<script src="assets/js/massdeleteproduct.js"></script>
<?php
require 'app/views/item/_item.php';

require 'app/views/partials/footer.php';
?>