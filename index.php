<?php


$url = parse_url($_SERVER["REQUEST_URI"])["path"];



$routes = [
    "/" => "controller/index.php",
    "/create" => "controller/create.php",
    "/edit" => "controller/edit.php"
];



if(array_key_exists($url, $routes)){
    require $routes[$url];
}else{
    require "controller/index.php";
}