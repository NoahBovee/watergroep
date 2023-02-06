<?php


function getData()
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
