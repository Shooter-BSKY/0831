<?php  
   session_start();
   $username = $_SESSION["username"];
   if ($username==NULL) {
   	header("Location: index.php?redir=lotto.php");
   	  exit;
   }
 ?>



<h1>公益彩卷</h1>
<hr>
<?php
	$count = 0 ;//目前取得的數字個數
	while ($count < 5 ) {
		$t= rand(1 , 49); //先取得一個候選的隨機數
		if (in_array($t, $lotto)) continue;
		$lotto[] = $t;
		$count ++;

		
	}
	sort($lotto);
	foreach ($lotto as $no) {
		echo $no . ",";
	}
        
        $c= rand(1,49);
        while (in_array($c,$lotto))
            $c=rand(1,49); 
        	
        
		echo "<br>特別號:". $c;

?>
<hr>
中獎請捐錢...接下來請收看...
<hr>
<iframe width="560" height="315" src="https://www.youtube.com/embed/GKmkErTYXYI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>