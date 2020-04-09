<html>
<h2>訂購商品頁面</h2>
	<form action="catalog1.php" method="POST">
	選擇商品：
	<select name="Item">
			<option value="A001">書-$70</option>
		 	<option value="A002">椅-$130</option>
		 	<option value="A003">床-$1520</option>
	</select> 
	數量:<input type="text"  name="Quantity">
	<input type="submit" value="提交商品">
	</form>
	<a href="catalog1.php">商品目錄</a></br>
	<a href="cart1.php">檢視購物車</a>

<?php
session_start();  
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "A001":
         $_SESSION["Name"] = "書";
         $_SESSION["Price"] = 70;
         break;
      case "A002":
         $_SESSION["Name"] = "椅";
         $_SESSION["Price"] = 130;
         break;
      case "A003":
         $_SESSION["Name"] = "床";
         $_SESSION["Price"] = 1520;
         break;   
   }  
   header("Location: addcart1.php");  
}
?>
</html>