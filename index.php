<?php
require "./db.php";

if (isset($_GET) && !empty($_GET['id'])) {
    $customer = getCustomer($_GET['id']);
    if (!$customer) {
        echo "No customer found";
        exit();
    }
} else {
    echo "No customer selected";
    exit();
}
