<?php
require_once __DIR__ . "/layouts/header.php";
?>

<div class="container">
    <div class="row justify-content-between mt-4">
        <div class="col-10">
            <h2>Product List</h2>
        </div>
        <div class="col-2">
            <button><a href="addproduct.php" class="btn-underline-none" >ADD</a></button>
            <button type="submit" id="delete-product-btn">MASS DELETE</button>
        </div>
    </div>
    <hr>
    <form id="allProductsForm" action="delete_product.php" method="POST">
        <div id="products" class="row mt-5">
        </div>
    </form>
</div>



<script>
    $(document).ready(function() {
        getProducts();

        function getProducts() {
            $.ajax({
                type: "POST",
                url: "actions/get_products.php",
                success: function(data) {
                    $("#products").empty();
                    data = JSON.parse(data);
                    // console.log(data);
                    data.forEach(function(value) {
                        // console.log(value);

                        function checkProductType(type) {
                            if (type == "DVD") {
                                return 'Size: ' + value.size + 'KG';
                            }
                            if (type == "Book") {
                                return 'Weight: ' + value.weight + "KG";
                            }
                            if (type == "Furniture") {
                                return 'Dimension: ' + value.height + 'x' + value.width + 'x' + value.lenght;
                            }
                        }

                        $('#products').append(`
                            <div class="col-3">
                                <div class="card mb-5">
                                    <input type="checkbox" class="form-check-input float-checkbox delete-checkbox" value="${value.id}" data-type="${value.productType}">
                                    <div class="card-body text-center">
                                        <p>${value.sku}</p>
                                        <p>${value.name}</p>
                                        <p>${value.price}$</p>
                                        <p>${checkProductType(value.productType)}</p>
                                    </div>
                                </div>
                            </div>
                        `)
                    })
                }
            })
        }



        $(document).on('click', "#delete-product-btn", function(e) {
            e.preventDefault();
            let data = [];
            $('.delete-checkbox:checkbox:checked').each((index, item) => {
                // console.log($(item).val());
                data.push({id:$(item).val(), productType:$(item).data('type')})
            })

            $.ajax({
                type: "POST",
                url: "actions/delete_product.php",
                data: {data: data},
                success: function(data) {
                    getProducts();
                }
            })
        })
    })
</script>

<?php
require_once __DIR__ . "/layouts/footer.php";
?>