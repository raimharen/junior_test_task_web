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
        <a href="mass_delete" class="btn btn-outline-dark" role="button">MASS DELETE</a>
    </div>
</div>

<?php
require 'app/views/_item.php';

require 'app/views/partials/footer.php';
?>