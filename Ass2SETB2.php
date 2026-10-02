<?php
     echo"perfect number between 1 to 100:<br>";
    
     for($num=1; $num<=100; $num++)
     {
	$sum=0;
	for($i=1; $i<$num; $i++)
	{
	 if($num % $i==0)
	  {
	    $sum+=$i;
	  }
	}
	 if($sum==$num)
	  {
	    echo $num.""."<br>";
	  }
     }
?>