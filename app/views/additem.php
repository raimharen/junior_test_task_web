<?php
require 'app/views/partials/head.php';
?>

<div class="row mt-5 border-bottom">
    <div class="col-8">
        <h1>Product Add</h2>
    </div>
    <div class="col-1 d-flex align-items-center justify-content-center">
        <button href="new_item" class="btn btn-outline-dark" role="button" type="submit" form="save">Save</button>
    </div>
    <div class="col-3 d-flex align-items-center justify-content-center">
        <a href="/" class="btn btn-outline-dark" role="button">Cancel</a>
    </div>
</div>

<div class="row">
    <div class="col-3-md pt-3">
        <form action="add_item" method="post" id="save">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">SKU</span>
                </div>
                <input type="text" class="form-control" placeholder="" name="sku">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                </div>
                <input type="text" class="form-control" placeholder="" name="name">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Price ($)</span>
                </div>
                <input type="text" class="form-control" placeholder="" name="price">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Type Switcher</span>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="type">
                    <option selected>Choose...</option>
                    <option value="dvd">DVD</option>
                    <option value="furniture">Furniture</option>
                    <option value="book">Book</option>
                </select>
            </div>
            <!-- DVD SIZE -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Size (MB)</span>
                </div>
                <input type="text" class="form-control" placeholder="Provide size in MB" name="specific">
            </div>
            <!-- FURNITURE SIZE -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Dimension (CM)</span>
                </div>
                <input type="text" class="form-control" placeholder="Provide dimension in HxWxL format" name="specific" disabled>
            </div>
            <!-- BOOK WEIGHT -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Weight (KG)</span>
                </div>
                <input type="text" class="form-control" placeholder="Provide weight in KG" name="specific" disabled>
            </div>
        </form>
    </div>
</div>



<?php
require 'app/views/partials/footer.php';
?>