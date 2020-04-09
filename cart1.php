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
  if ( isset($_COOKIE[$arr]) && 
                   is_array($_COOKIE[$arr]) ) {
     if ($flag) {   
        $flag = false;
     } else {
        $flag = true;
        
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='delete1.php?Id=".$arr."'>";
     echo "刪除</a></td>";
     $price = 0;
     $quantity = 0; 
     while ( list($name, $value)=each($_COOKIE[$arr])) {
        
        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;  
     echo "</tr>";
  }
}
if ($total != 0) { 
   echo "<td colspan=10 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
</table>
<a href="catalog1.php">商品目錄</a>
<a href="cart1.php">檢視購物車</a>
</html>