<?php
ob_start(); 
session_start();

$uid="a1073302";
$upwd="3302";

$id=$_POST["id"];
$pwd=$_POST["pwd"];


if($uid==$id && $upwd==$pwd){
    $_SESSION["login"]="S";
    $_SESSION["ID"]=$id;

    header('Location:testcatalog.php');
}else{
    $_SESSION["login"]="F";
    header('Location:llogin.php');
}


?>