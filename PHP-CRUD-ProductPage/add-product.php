<?php
require_once __DIR__ . "/layouts/header.php";
?>

<div class="container addProduct">
    <div class="row mt-4">
        <div class="row justify-content-between">
            <div class="col-10">
                <h2>Product Add</h2>
            </div>
            <div class="col-2">
                <button type="submit" id="saveProduct">Save</button>
                <button><a href="index.php" class="btn-underline-none">Cancel</a></button>
            </div>
            <hr>
        </div>
        <div class="col-10 mt-4">
            <form id="product_form">
                <div class="mb-3 formfield">
                    <label for="sku">SKU</label>
                    <input type="text" id="sku" class="mandatory" name="sku"><br>
                </div>
                <div class="mb-3 formfield">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="mandatory" name="name"><br>
                </div>
                <div class="mb-3 formfield">
                    <label for="price">Price ($)</label>
                    <input type="text" id="price" class="number mandatory" name="price"><br>
                </div>
                <div class="mb-3 formfield">
                    <label for="productType">Type Switcher</label>
                    <select id="productType" class="mandatory" name="productType">
                        <option value="chooseProduct" selected>Choose product Type</option>
                        <option value="DVD">DVD</option>
                        <option value="Book">Book</option>
                        <option value="Furniture">Furniture</option>
                    </select>
                </div>
                <div class="mb-3 dvd formfield attributes d-none">
                    <label for="size">Size (MB)</label>
                    <input type="text" id="size" name="size"><br>
                    <p class="mt-3">Please, provide size</p>
                </div>
                <div class="mb-3 book formfield attributes d-none">
                    <label for="weight">Weight (KG)</label>
                    <input type="text" id="weight" name="weight"><br>
                    <p class="mt-3">Please, provide weight</p>
                </div>
                <div class="mb-3 furniture formfield attributes d-none">
                    <label for="height">Height (CM)</label>
                    <input type="text" id="height" name="height" class="furnitureAttributes"><br><br>
                    <label for="width">Width (CM)</label>
                    <input type="text" id="width" name="width" class="furnitureAttributes"><br><br>
                    <label for="length">Length (CM)</label>
                    <input type="text" id="length" name="length" class="furnitureAttributes"><br><br>
                    <p class="mt-3">*Please, provide dimensions</p>
                </div>
                <div class="mt-3 messageEmpty" style=" display: none; color: red;">
                    <p>*Please, submit required data</p>
                </div>
                <div class="mt-3 messageNumber" style=" display: none; color: red;">
                    <p>*Please, provide the data of indicated type</p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let sku = $("#sku");
        let name = $("#name");
        let price = $("#price");
        let productType = $("#productType");
        let size = $("#size");
        let weight = $("#weight");
        let height = $("#height");
        let width = $("#width");
        let length = $("#length");



        //dynamically showing inputs for the product-specific attributes and remove the other inputs fields that are not specific for the choosen product type 
        $("#productType").on("change", function() {
            if ($(this).val() == 'DVD') {
                size.addClass('mandatory');
                size.addClass('number');
                $(".dvd").siblings('.attributes').children('input').removeClass('mandatory');
                $(".dvd").siblings('.attributes').children('input').removeClass('number');
                $(".dvd").removeClass("d-none");
                $(".dvd").addClass("d-block");
                $(".dvd").siblings('.attributes').addClass("d-none");
            }
            if ($(this).val() == 'Book') {
                weight.addClass('mandatory');
                weight.addClass('number');
                $(".book").siblings('.attributes').children('input').removeClass('mandatory');
                $(".book").siblings('.attributes').children('input').removeClass('number');
                $(".book").removeClass("d-none");
                $(".book").addClass("d-block");
                $(".book").siblings('.attributes').addClass("d-none");
            }
            if ($(this).val() == 'Furniture') {
                $(".furnitureAttributes").each(function(index, element) {
                    $(element).addClass('mandatory');
                    $(element).addClass('number');
                });
                $(".furniture").siblings('.attributes').children('input').removeClass('mandatory');
                $(".furniture").siblings('.attributes').children('input').removeClass('number');
                $(".furniture").removeClass("d-none");
                $(".furniture").addClass("d-block");
                $(".furniture").siblings('.attributes').addClass("d-none");
            }
            if ($(this).val() == 'chooseProduct') {
                $(".dvd").addClass("d-none");
                $(".book").addClass("d-none");
                $(".furniture").addClass("d-none");
            }
        });



        $(document).on('click', "#saveProduct", function(e) {
            e.preventDefault();

            sku.css('outline', 'none');
            name.css('outline', 'none');
            price.css('outline', 'none');
            productType.css('outline', 'none');
            size.css('outline', 'none');
            weight.css('outline', 'none');
            height.css('outline', 'none');
            width.css('outline', 'none');
            length.css('outline', 'none');



            function validationForm() {
                let valid = true;
                let errors = [];

                // validation, check if input fields are empty
                $('#product_form div')
                    .find(".mandatory")
                    .each(function(index, element) {
                        if ($(element).val() == '' || $(element).val() == 'chooseProduct') {
                            $(element).css("outline", "1px solid red");
                            errors.push('empty');
                        }
                    });

                // validation, check if entered value is numeric
                $('#product_form div')
                    .find(".number")
                    .each(function(index, element) {
                        if (!$.isNumeric($(element).val()) && $(element).val() !== '') {
                            $(element).css("outline", "1px solid red");
                            errors.push('notNumber');
                        }
                    });

                //show message if fielda are empty or have invalid data
                if (errors.indexOf("empty") >= 0) {
                    $('.messageEmpty').css("display", "block");
                } else {
                    $('.messageEmpty').css("display", "none");
                }
                if (errors.indexOf("notNumber") >= 0) {
                    $('.messageNumber').css("display", "block");
                } else {
                    $('.messageNumber').css("display", "none");
                }


                if (errors.length > 0) {
                    valid = false;
                }
                return valid;
            }



            if (validationForm()) {
                // remove all inputs that are not mandatory for the choosen product type
                $('#product_form').children('.d-none').remove();
                // console.log($('#product_form').serialize());

                $.ajax({
                    type: "POST",
                    data: ($('#product_form').serialize()),
                    url: "actions/create_product.php",
                    success: function(data) {
                        // console.log(data);
                        data = JSON.parse(data);
                        if (data.message == "success") {
                            location.href = 'index.php';
                        }
                    }
                })
            }
        })
    })
</script>

<?php
require_once __DIR__ . "/layouts/footer.php";
?>