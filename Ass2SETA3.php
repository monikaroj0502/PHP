<?php
     $per=65;
	if($per<40)
	 {
	   $grade="fail";
	 }
	else if($per>=40 && $per<50)
	 {
	   $grade="pass";
	 }
	else if($per>=50 && $per<60)
	 {
	   $grade="higher second class";
	 }
	else if($per>=60 && $per<70)
	 {
	   $grade="first class";
	 }
	else
	 {
	   $grade="first class";
	 }
    echo"percentage=$per";
    echo"<br>";
    echo"grade=$grade";

?>