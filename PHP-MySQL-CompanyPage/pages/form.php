<?php
require_once __DIR__ . "/../connection/db.php";

$emptyFields = " ";
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyFields") {
        $emptyFields = "<div class='emptyFields'>*All fields are required</div>";
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form</title>
</head>

<style>
    .bg-image {
        background: url("../images/flowers.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }

    .bg-white {
        background-color: white;
    }

    .bg-gray {
        background-color: #3c3c3c;
    }

    .color-darkgray {
        color: #3c3c3c;
    }

    .font {
        font-size: 20px;
        color: white;
    }

    .emptyFields {
        color: red;
        font-size: 25px;
    }
</style>

<body>
    <div class="container-fluid bg-image">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-5 color-darkgray">You are one step away from your webpage</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <div class="col-12 emptyFields mb-2">
                    <?= $emptyFields ?>
                </div>
                <form action="insert.php" method="POST">
                    <div class="row">
                        <div class="col-3 bg-white py-4 ml-5">
                            <label>Cover Image URL</label><br>
                            <input type="text" name="cover_img_url" class="form-control"><br>
                            <label>Main Title of Page</label><br>
                            <input type="text" name="main_title" class="form-control"> <br>
                            <label>Subtitle of Page</label><br>
                            <input type="text" name="subtitle" class="form-control"><br>
                            <label>Something about you </label><br>
                            <textarea name="about_us" class="form-control"></textarea><br>
                            <label>Your telephone number</label><br>
                            <input type="text" name="phone" class="form-control"><br>
                            <label>Location</label><br>
                            <input type="text" name="location" class="form-control"><br>
                            <label>Do you provide services or ptoducts?</label><br>
                            <select name="services_or_products" class="form-control">
                                <option value="services">Services</option>
                                <option value="products">Products</option>
                            </select>
                        </div>
                        <div class="col-3 offset-1 bg-white">
                            <h6 class="my-4">Provide url for an image and description for your service/product</h6>
                            <label>Image URL</label><br>
                            <input type="text" name="img_url1" class="form-control"><br>
                            <label>Description of service/product</label><br>
                            <textarea name="description1" class="form-control"></textarea><br>
                            <label>Image URL</label><br>
                            <input type="text" name="img_url2" class="form-control"><br>
                            <label>Description of service/product</label><br>
                            <textarea name="description2" class="form-control"></textarea><br>
                            <label>Image URL</label><br>
                            <input type="text" name="img_url3" class="form-control"><br>
                            <label>Description of service/product</label><br>
                            <textarea name="description3" class="form-control"></textarea><br>
                        </div>
                        <div class="col-3 offset-1 bg-white">
                            <h6 class="my-4">Provide a description for your company, something people should be aware of before they contact you:</h6>
                            <textarea name="description_company" class="form-control"></textarea><br>
                            <label>Linkedin</label><br>
                            <input type="text" name="linkedin" class="form-control"> <br>
                            <label>Facebook</label><br>
                            <input type="text" name="facebook" class="form-control"> <br>
                            <label>Twitter</label><br>
                            <input type="text" name="twitter" class="form-control"> <br>
                            <label>Google</label><br>
                            <input type="text" name="google_plus" class="form-control"> <br>
                        </div>

                        <div class="col-6 offset-3 my-5">
                            <button type="submit" class="btn bg-gray font btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>