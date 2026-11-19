<?php
require_once__DIR__ . "/../controllers/UsuariosController.php";

$rota = $_GET["rota"]?? "";
$metodo = $_SERVER["REQUEST_METHOD"];

if($rota === "usuario"){
    switch($metodo){
        case "POST":
            createUsuario($con);
    }
}
if($rota === "usuario"){
    switch($metodo){
        case "GET":
            readUsuario($con);
            break;
    }
}
if($rota === "usuario"){
    switch($metodo){
        case "PUT":
            updateUsuario($con);
            break;
    }
}if($rota === "usuario"){
    switch($metodo){
        case "DELETE":
            deleteUsuario($con);
            break;
        default:
        teste();
    }
}

require_once "config.php";

if($rota === "publicacao"){
    switch($metodo){

        case "GET":
            readPublicacao($con);
            break;

        case "POST":
            createPublicacao($con);
            break;

        case "PUT":
            updatePublicacao($con);
            break;

        case "DELETE":
            deletePublicacao($con);
            break;
    }
}

if($rota === "curtida"){
    switch($metodo){

        case "GET":
            readCurtida($con);
            break;

        case "POST":
            createCurtida($con);
            break;

        case "DELETE":
            deleteCurtida($con);
            break;
    }
}