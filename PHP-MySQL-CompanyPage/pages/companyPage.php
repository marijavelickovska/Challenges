<?php
require_once __DIR__ . "/../connection/db.php";

$sql = "SELECT * FROM company WHERE id = :id";

$id = ($_GET['id']);

$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);

if ($stmt->rowCount() == 0) {
    header("Location: index.php");
    die();
}

$company = $stmt->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($company);
// die();


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Page 3</title>
</head>

<style>
    .bg-color {
        background-color: #f6f6f6;
    }

    .bg-image {
        background: url("<?= $company['cover_img_url'] ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 70vh;
    }

    .nav-link,
    .navbar-brand {
        color: black;
    }

    h1 {
        font-size: 50px;
        margin-top: 100px;
    }

    .card-body {
        background-color: #343A40;
        color: white;
    }

    .btn {
        background-color: #43A3B8;
    }

    .white {
        color: white;
    }

    .bg-gray {
        background-color: #343A40;
        color: white;
    }

    button :hover {
        text-decoration: none;
    }

    .font {
        font-size: 20px;
        padding-right: 5px;
    }
</style>

<body class="bg-color" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">WEBSTER</a>
        <div class="collapse navbar-collapse" id="navbarNav" id="home">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutUs">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row bg-image text-center white">
            <div class="col-12 title">
                <h1><?= $company['main_title'] ?></h1>
            </div>
            <div class="col-6 offset-3">
                <h4><?= $company['subtitle'] ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4 text-center pt-5" id="aboutUs">
                <h2>About us</h2><br>
                <p><?= $company['about_us'] ?></p>
                <hr>
                <p>Telephone: <?= $company['phone'] ?></p>
                <p>Location: <?= $company['location'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1" id="services">
                <h2 class="my-4"><?= $company['services_or_products'] ?></h2>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img src="<?= $company['img_url1'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h4><?= $company['services_or_products'] ?> one</h4>
                                <p class="card-text"><?= $company['description1'] ?></p>
                                <small>Last updated date</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?= $company['img_url2'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h4><?= $company['services_or_products'] ?> two</h4>
                                <p class="card-text"><?= $company['description2'] ?></p>
                                <small>Last updated date</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?= $company['img_url3'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h4><?= $company['services_or_products'] ?> three</h4>
                                <p class="card-text"><?= $company['description3'] ?></p>
                                <small>Last updated date</small>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <hr>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-10 offset-1">
                <div class="row mt-4" id="contact">
                    <div class="col-6">
                        <h2>Contact</h2>
                        <p><?= $company['description_company'] ?></p>
                    </div>
                    <div class="col-6">
                        <form action="" method="POST">
                            <label>Name</label><br>
                            <input type="text" name="name" class="form-control"><br>
                            <label>Email</label><br>
                            <input type="email" name="email" class="form-control"> <br>
                            <label>Message</label><br>
                            <textarea name="message" class="form-control"></textarea><br>
                            <button type="submit" class="btn btn-md"><a class="white" href="">Send</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-gray">
            <div class="col text-center py-3">
                <p>Copyright by Marija @ Brainster</p>
                <a class="font" href="<?= $company['linkedin'] ?>">linkedin</a>
                <a class="font" href="<?= $company['facebook'] ?>">facebook</a>
                <a class="font" href="<?= $company['twitter'] ?>">twitter</a>
                <a class="font" href="<?= $company['google_plus'] ?>">google+</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>