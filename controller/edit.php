<?php


require ("../Database.php");
require ("../dbController.class.php");

$db = new dataBase;
$dbController = new dbController($db);
$db->connection();


if (isset($_GET['id'])) {
    echo "this is id: " . $_GET['id'];
    $result = $dbController->selectPost($_GET['id']);
    var_dump($result);
} else {
    echo "nopoe";
    header('location: /');
}


require('../views/edit.view.php');