<html>
<h2>登入會員</h2>


<form action="ccheck.php" method="POST">
帳號<input type="text" name="id" value="<?php echo $user ?>" required></br>
密碼<input type="password" name="pwd" required></br>
<input type="submit">

</form>
</html>