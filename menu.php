<?php 
    session_start(); 
	$username = $_SESSION["username"];	
    $link_HOME = "<a href='index.php'>首頁</a>";	
    $link_login = "<a href='login.php'>登入</a>";
    $link_lotto = "<a href='lotto.php'>公益彩卷</a>";
    $link_movid="<a href='movid.php'>影片比較</a>";
    $link_mmovid="<a href='mmovid.php'>影片清單</a>";
    $link_QQQQQQ="<a href='re.php'>影片清單(測試)</a>";
    $link_logout = "<a href='logout.php'>登出</a>";
    echo $link_HOME . "  ";
    if ($username==NULL) {
    	//如果是訪客的話，執行這邊
    	echo $link_login . "  " ;
    } else {
    	//如果是會員，執行這邊
    	echo $link_lotto . "  ";
    	echo $link_movid ."   ";
        echo $link_mmovid . "  ";
        echo $link_QQQQQQ . "  ";
        echo $link_logout . "  " ;
    }



?>