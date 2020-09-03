<?php session_start(); 
	$username = $_SESSION["username"];
	$email = $_SESSION["email"];
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>隨意0831</title>
</head>
<body>
	<h1>
		隨意0831練習網頁
	</h1>
	<hr>
	<?php include ("menu.php"); ?>
	<hr>
	<?php
	//檢查$username的內容來決定瀏覽者的身份
	if ($username!=NULL) {
	echo "帳號：" . $username . "<br>" . 
	     "信箱：" . $email . "<br>";
	    
	     echo"恭喜您成為了此網站的第...位會員，但是沒有獎勵！！！<br>";
	     echo"如需要獎勵，請成為付費會員，謝謝！！！";
	} else {
		echo "歡迎來到此網站，請登入檢視更多豐富內容！<br>";
	}
	echo "<hr>";
	//以下引入頁尾的程式碼
	include "footer.php"

?>
    <hr>
</body>
</html>
