<?php
   $day ="Monday";
	switch($day)
	{
	  case "Monday":
	   $color="red";
	   break;

	  case "Tuesday":
	   $color="blue";
	   break;

	  case "Wednesday":
	   $color="Green";
	   break;

	  case "Thursday":
	   $color="Yellow";
	   break;

	  case "Friday":
	   $color="Pink";
	   break;

	  case "Saturday":
	   $color="Orange";
	   break;

	  case "Sunday":
	   $color="purple";
	   break;
	}
    echo"<body style ='background-color:$color'>";
    echo"<h1>Today is $day</h1>";
    echo"</body>";

?>