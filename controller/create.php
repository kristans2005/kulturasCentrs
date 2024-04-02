<?php


require ("Database.php");
require ("dbController.class.php");

$db = new dataBase;
$dbController = new dbController($db);
$db->connection();




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    $name = $_POST['name'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    
    
    if(strlen($name) != 0 && strlen($place) != 0 && strlen($date) != 0){
        $dbController->addPost($_POST['name'], $_POST['place'], $_POST['date']);
    }else{
        $error = "please fill all forms";
    }

    // if(strlen($name) != 0 || strlen($name) > 255){
    //     $error['title'] = "cant be to big ot";
    // }

    

    
    
}



require("views/create.view.php");