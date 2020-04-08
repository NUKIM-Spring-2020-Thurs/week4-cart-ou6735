<html>
	<table border="1">
		<tr >
			<td>功能</td>
			<td>商品編號</td>
			<td>商品名稱</td>
			<td>商品價格</td>
			<td>商品數量</td>
		</tr>
<?php
$flag = false;  $total = 0;
while ( list($arr, $value) = each($_COOKIE) ) {
  if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) {
     if ($flag) {   
        $flag = false;
     } else {
        $flag = true; 
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='testdel.php?Id=".$arr."'>";
     echo "刪除</a></td>";
     $price = 0;
     $quantity = 0;
     while ( list($name, $value)=each($_COOKIE[$arr])) {
        echo "<td>" . $value . "</td>";
        if ($name == "money")  $money = $value;
        if ($name == "num") $num = $value;
     }
     $total =$total+ ($money * $num);
     echo "</tr>";
  }
}
if ($total != 0) { 
   
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
</table>
<a href="testcatalog.php" class="back">回商品目錄</a></br>
<a href="testcart.php" class="back">檢視購物車</a>

</html>