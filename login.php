<?php
   $redir= $_GET["redir"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>隨意0831</title>
</head>
<body>
	<h2>請登入</h2>
	<hr>
	    <?php include("menu.php"); ?>
	<hr>
     <form method="POST" action="chkpas.php">
		<table width="300" border="0">
                              <input type="hidden" name="redir" value=<?php echo $redir; ?>>
		<tr><td>帳號：</td><td><input type="text" name="username"></td></tr>
		<tr><td>密碼：</td><td><input type="password" name="password"></td></tr>
		<tr><td>信箱：</td><td><input type="text" name="email"></td></tr>
		<tr><td align=center colspan=2><input type="submit" value= "登入"></td></tr>
	    </table>
     </form>
</body>
</html>
