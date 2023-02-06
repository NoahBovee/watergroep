<?php
require "./db.php";
require "./functions.php";

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
var_dump($_POST);

if (isset($_POST["id"])) {
    $form = array(
        "voornaam" => $_POST["voornaam"],
        "naam" => $_POST["naam"],
        "straatnaam" => $_POST["straatnaam"],
        "nummerbus" => $_POST["nummerbus"],
        "postcode" => $_POST["postcode"],
        "locatie" => $_POST["locatie"],
        "meterstand" => $_POST["meterstand"],


    );
}

if (isset($_GET["id"])) {
    $values = getData($_GET["id"])[0];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>watergroep</title>
</head>

<body>


    <div class="container">
        <form action="<?= $_GET["id"] ?>" method="POST">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <input type="text" name="voornaam" value="<?= $_GET["voornaam"] ?>">
            <input type="text" name="naam" value="<?= $_GET["naam"] ?>">
            <input type="text" name="straatnaam" value="<?= $_GET["straatnaam"] ?>">
            <input type="text" name="nummerbus" value="<?= $_GET["nummerbus"] ?>">
            <input type="text" name="postcode" value="<?= $_GET["postcode"] ?>">
            <input type="text" name="locatie" value="<?= $_GET["locatie"] ?>">
            <input type="text" name="created_at" value="<?= $_GET["created_at"] ?>">
            <input type="text" name="updated_at" value="<?= $_GET["updated_at"] ?>">
            <button type="submit">verzenden</button>
        </form>
    </div>


</body>

</html>