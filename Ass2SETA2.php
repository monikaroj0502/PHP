<?php
	$a=20;
	$b=16;
	$c=5;
       $choice=1;
	switch($choice)
	 {
	   case 1:
		echo"Addition=".($a+$b);
		break;

	   case 2:
		echo"subtraction=".($a-$b);
		break;

	  case 3:
		echo"Multipliation=".($a*$b);
		break;

	  case 4:
		echo"Division=".($a/$b);
		break;
	  
           default:
		echo"Invalid choice";
	}
?>