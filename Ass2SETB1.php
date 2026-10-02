<?php
     echo"prime number between 1 to 50 are:<br>";
	for($num=2; $num<= 50; $num++)
	{
	  $prime=true;
	   for($i=2; $i < $num; $i++)
	       	{
		 if($num % $i==0)
		    {
			$prime=false;
			break;
		    }
		}
		if($prime)
		{
		  echo $num.""."<br>";
		}
	} 
?>