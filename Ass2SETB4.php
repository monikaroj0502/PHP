<?php
   echo"Armstrong number between 1 to 500:<br>";
	for($num=1; $num<=500; $num++)
	 {
	    $temp=$num;
	    $sum=0;

	  while($temp > 0)
	    {
	      $digit =$temp % 10;
	      $sum +=$digit*$digit*$digit;
	      $temp = intval($temp /10);
	    }
	  if($sum == $num)
	   {	
	      echo $num.""."<br>";
	   }
	 }
?>