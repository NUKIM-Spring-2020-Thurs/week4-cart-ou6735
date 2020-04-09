<?php
session_start(); 
if ( isset($_SESSION["ID"]) ) {
   $id = $_SESSION["ID"]; 
   $name = $_SESSION["Name"];
   $price = $_SESSION["Price"];
   $quantity = $_SESSION["Quantity"];  
   $date=strtotime("+7 days",time());  
   setcookie($id."[ID]", $id, $date);
   setcookie($id."[Name]", $name, $date);
   setcookie($id."[Price]", $price,$date);
   setcookie($id."[Quantity]", $quantity, $date);
}
header("Location: cart1.php");  
?>