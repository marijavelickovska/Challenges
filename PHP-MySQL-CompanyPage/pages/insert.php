<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: form.php");
    die();
}

require_once __DIR__ . "/../connection/db.php";

$requiredFields = [
    'cover_img_url', 'main_title', 'subtitle', 'about_us', 'phone', 'location', 'services_or_products',
    'img_url1', 'description1', 'img_url2', 'description2', 'img_url3', 'description3', 'description_company', 'linkedin',
    'facebook', 'twitter', 'google_plus'
];
$found = false;
foreach ($requiredFields as $value) {
    if ($_POST[$value] == '') {
        $found = true;
        break;
    }
}
if ($found) {
    header("Location: form.php?error=emptyFields");
    die();
}



$sql = "INSERT INTO company (cover_img_url, main_title, subtitle, about_us, phone, location, services_or_products, 
img_url1, description1, img_url2, description2, img_url3, description3, description_company, linkedin, facebook, twitter,
google_plus) VALUES (:cover_img_url, :main_title, :subtitle, :about_us, :phone, :location, :services_or_products, 
:img_url1, :description1, :img_url2, :description2, :img_url3, :description3, :description_company, :linkedin, 
:facebook, :twitter, :google_plus)";

$stmt = $conn->prepare($sql);
// echo "<pre>";
// print_r($_POST);
// die();


if ($stmt->execute($_POST)) {
    $id = $conn->lastInsertId();
    header("Location:companyPage.php?id=$id");
    die();
}

header("Location:form.php?status=error");
die();
