<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'watergroep';
$db_port = 8889;

try {
    $pdo = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}


function getDbInfo()
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM `watergroep_klanten` ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getCustomer($id)
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `watergroep_klanten` WHERE `id` = id");
    $stmt->execute(['id' => $id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
