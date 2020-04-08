<html>
<h2>訂購商品頁面</h2>
	<form action="testcatalog.php" method="POST">
	選擇商品：
	<select name="goods">
			<option value="a">書-$70</option>
		 	<option value="b">椅-$130</option>
		 	<option value="c">床-$680</option>
	</select> &nbsp;
	數量:<input type="text"  name="num">
	<input type="submit" value="提交商品">
	</form>
	<a href="testcatalog.php">商品目錄</a></br>
	<a href="testcart.php">檢視購物車</a>
	<?php
		session_start();
		if(isset($_POST["goods"])){
			$_SESSION["num"] = $_POST["num"];
			$id = $_POST["goods"];
			$_SESSION["ID"] = $id;
			switch (strtoupper($id)) {
				case "a":
					$_SESSION["name"]="書";
					$_SESSION["money"]="70";
					break;
				case "b":
					$_SESSION["name"]="椅";
					$_SESSION["money"]="130";
					break;
				case "c":
					$_SESSION["name"]="床";
					$_SESSION["money"]="1530";
					break;
			}
			header("Location:testadd.php");
		}
	?>
</html>