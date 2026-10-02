<?php
     $num=607;
     $reverse=0;
	
	while($num > 0)
	{	
	  $digit=$num % 10;
	  $reverse = ($reverse*10)+ $digit;
        $num= intval($num / 10);
	}
   echo"Reverse number =".$reverse."<br>";
?>