<?php
    $i =1;
    $even = 0;
    $odd = 0;
   
    while($i<=1000)
    {
	if($i % 2==0)
	{	
	  $even++;
	}
	else
	{
	 $odd++;
	}
       $i++;
    }
	echo"Today even number=".$even;
	echo"<br>";
	echo "Total odd numbers=".$odd; 

?>