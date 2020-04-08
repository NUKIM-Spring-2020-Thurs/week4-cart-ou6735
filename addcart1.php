<?php
session_start();
if ( isset($_SESSION["ID"]) ) {
   $id = $_SESSION["ID"];
   $name = $_SESSION["name"];
   $money = $_SESSION["money"];
   $num = $_SESSION["num"]; 
   $date=strtotime("+7 days",time()); 
   setcookie($id."[ID]", $id, $date);
   setcookie($id."[name]", $name, $date);
   setcookie($id."[money]", $money, $date);
   setcookie($id."[num]", $num, $date);
}
header("Location:testcart.php");

?>