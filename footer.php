<?php
   
   $fp=fopen("counter.txt" , "r") or die ("Unable to open the file");
   $counter = fread($fp, filesize("counter.txt"));
   fclose($fb);

   echo "本網站參觀人次：";
   readfile("counter.txt");
   echo "人次";

?>