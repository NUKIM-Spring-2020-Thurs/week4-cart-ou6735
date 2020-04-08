<?php
$id=$_GET["Id"];
if(isset($_COOKIE[$id])){
	while (list($name,$value)=each($_COOKIE[$id])) {
		$date=strtotime("-7 days",time());
		setcookie($id."[".$name."]","",$date);
	}
}
header("Location:testcart.php");
?>