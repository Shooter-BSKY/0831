<?php
   session_start();
   //以下取自於表單資料
   $username = $_POST["username"];
   $email = $_POST["email"];
   $password = $_POST["password"];

  

   if ($password=="1234") {
   	  //成功登入要處理的程式碼
   	  //SESSION就好像是在共同公布欄用Key ==> Value的方式加註資料
   	  //SESSION["key:username"] <== Value: $usename (來自於表單)
      $_SESSION["username"]=$username;
      $_SESSION["email"]=$email;
      // $redir 是來自於lotto.php?redir=xxx.php的參數
      // 它的目的是指引在表單完成之後, 要前往的目標網頁
       if ($redir!=NULL) {
      // 表示有指定要前往的頁面
      // 所以就
       	 header("Location: $redir");
       } else {
         header("Location: index.php");
       }
       exit;
   } else {
   	  //登入失敗要處理的程式碼
   	  echo "密碼錯誤！<br>";
   	  echo "<a href='login.php'>回上一頁</a>" ;
   }

?> 