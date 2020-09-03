<?php session_start(); 
	$username = $_SESSION["username"];
	if ($username==NULL) {
		header("Location: login.php?redir=movid.php");
	   exit;
	}
   $tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>隨意movid</title>
</head>
<body>
	<h1>
		<title>movid影片比較</title>
	</h1>
    <?php 
    //echo $tags;
    //開啟檔案作為讀取
    $fp=fopen("movids.txt", "r") or die("Die!");
    //讀入所有資料, 放在$data變數中
    $data = fread($fp, filesize("movids.txt"));
    // 關檔
    fclose($fp);
    //explode用來以換列字元來拆解讀取到的資料
    $movids= explode("\n", $data);
    //以下用一個迴圈把每一個項目個別讀出來
    foreach ($movids as $movid ) {
      $temp =explode(",", $movid);
      //$temp這時候是一個陣列
      //第一個項目$temp[1]是影片名稱
      //第二個項目$temp[0]是影片id
      $model = trim($temp[1]);
      //使用trim清除前後空白字元
      $vid = trim($temp[0]);
      echo $model . "<br>";
      //以下做影片id的置換,並顯示出內容
      echo str_replace("^^^^", $vid, $tags) . "<br>";
    
    }
    ?>

</body>
</html>
