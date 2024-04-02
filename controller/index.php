<?php

require ("Database.php");
require ("dbController.class.php");

$db = new dataBase;
$dbController = new dbController($db);
$db->connection();


var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['delete'])){
        $dbController->delete($_POST['delete']);
        $pienakumi = ($dbController->showAll());
    }

    
}else{
    $pienakumi = ($dbController->showAll());
}

// if($_SERVER["REQUEST_METHOD"] == "GET"){

//     if(isset($_GET['id'])){ 
//         header("Location: /edit");
//     }
    
// }



require("views/index.view.php");



