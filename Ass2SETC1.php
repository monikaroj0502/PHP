<?php	
     $num =345;
     $str=(string)$num;
     $i=0;

	while($i <strlen($str))
	{   
	    switch($str[$i])
	    {	
	        case "0":
		  echo"Zero";
		  break;

		case "1":
		   echo"One";
		   break;

		case "2":
		  echo"Two";
		  break;

		case "3":
		   echo"Three";
		   break;

		case "4":
		   echo"Four";
		   break;

		case "5":
		  echo"Five";
	          break;

		case "6":
		  echo"Six";
		  break;

		case "7":
		  echo"Seven";
		  break;

		case "8":
		  echo"Eight";
      		  break;

		case "9":
		  echo"Nine";
		  break;
	        }
	    $i++;
	}
?>