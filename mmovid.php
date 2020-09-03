<?php session_start(); 
	$username = $_SESSION["username"];
	if ($username==NULL) {
		header("Location: login.php?redir=mmovid.php");
	   exit;
	}
   
  //下面是嵌入碼網址
   $tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

?>
<form method="post" action="mmovid.php">
<select name="mmovid">
　<option value="M-SDHZvkhgw">請選擇影片</option> 
  <option value="M-SDHZvkhgw">巴哈姆特手機遊戲</option>    
　<option value="Ao8nIWTBCBo">守望傳說</option>
　<option value="766qmHTc2ro">美波「等待雨､」MV</option>
　<option value="-tKVN2mAKRI">米津玄師『打上花火』</option>
  <option value="0YF8vecQWYs">美波「聲嘶力竭」MV</option>
  <option value="nzBJFq7BEAY">老皮戰鬥模擬器</option>

</select>
<input type="submit" size="7" value="選擇">
</form>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>隨意movid</title>
</head>
<body>
	<h1>
		<title>movid影片清單</title>
	</h1>

<?php
 
       $mmovid = $_POST["mmovid"];
  
      if ($mmovid == NULL){
         
       echo str_replace ( '^^^^' , 'M-SDHZvkhgw',$tags );
     
      } else {
        echo str_replace ( '^^^^' , $mmovid , $tags );
      }

?>    
  

</body>
</html>
