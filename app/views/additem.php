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
                <input type="text" class="form-control" placeholder="" name="sku" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                </div>
                <input type="text" class="form-control" placeholder="" name="name" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Price ($)</span>
                </div>
                <input type="text" class="form-control" placeholder="" name="price" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Type Switcher</span>
                </div>
                <select class="custom-select" name="type" id="type_choice" onclick="product_choice()">
                    <option selected>Choose...</option>
                    <option value="dvd">DVD</option>
                    <option value="furniture">Furniture</option>
                    <option value="book">Book</option>
                </select>
            </div>
            <!-- DVD SIZE -->
            <div class="input-group mb-3" id="dvd_block" style="display: none;">
                <div class="input-group-prepend">
                    <span class="input-group-text">Size (MB)</span>
                </div>
                <input id="dvd" type="text" class="form-control" placeholder="Provide size in MB" name="specific" disabled="true" required>
            </div>
            <!-- FURNITURE SIZE -->
            <div class="input-group mb-3" id="furniture_block" style="display: none;">
                <div class="input-group-prepend">
                    <span class="input-group-text">Dimension (CM)</span>
                </div>
                <input id="furniture" type="text" class="form-control" placeholder="Provide dimension in HxWxL format" name="specific" disabled="true" required>
            </div>
            <!-- BOOK WEIGHT -->
            <div class="input-group mb-3" id="book_block" style="display: none;">
                <div class="input-group-prepend">
                    <span class="input-group-text">Weight (KG)</span>
                </div>
                <input id="book" type="text" class="form-control" placeholder="Provide weight in KG" name="specific" disabled="true" required>
            </div>
        </form>
    </div>
</div>


<script src="assets/js/addpagechoice.js"></script> 
<?php
require 'app/views/partials/footer.php';
?>