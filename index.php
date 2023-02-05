<?php
require "./db.php";

if (isset($_GET) && !empty($_GET['id'])) {
    $customer = getCustomer($_GET['id']);
    if (!$customer) {
        echo "No records found";
        exit();
    }
} else {
    echo "No customer selected";
    exit();
}

$id = $_GET['id'];

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

    <h1>Welkom <?= $customer["voornaam"] ?></h1>


    <form class="form" action="" method="POST">
        <div class="formel"><label for="firstName">Voornaam: </label><input type="text" name="firstName" value="<?= $customer["voornaam"] ?>" disabled /></div>
        <div class="formel"><label for="lastName">Naam: </label><input type="text" name="Name" value="<?= $customer["naam"] ?>" disabled /></div>
        <div class="formel"><label for="street">Straat: </label><input type="text" name="street" value="<?= $customer["straatnaam"] ?>" disabled /></div>
        <div class="formel"><label for="number">Nummerbus: </label><input type="text" name="houseNumber" value="<?= $customer["nummerbus"] ?>" disabled /></div>
        <div class="formel"><label for="zip">Postcode: </label><input type="text" name="zip" value="<?= $customer["postcode"] ?>" disabled /></div>
        <div class="formel"><label for="city">Locatie: </label><input type="text" name="location" value="<?= $customer["locatie"] ?>" disabled /></div>
        <div class="formel"><label for="currentMeter">Huidige meterstand: </label><input type="text" name="currentMeter" min="0" max="999999" /></div>
        <input type="submit" value="Submit" />
    </form>

</body>

</html>