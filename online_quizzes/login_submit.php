<?php

	include("class/users.php"); 
	$login=new users;
	extract($_POST);
	$ans=$login->login($email,$pwd); 
	echo $ans;                 //to get the value from form directly
	if ($ans==1) 
	{
		header("location:quiz_home.php");
	}
	else
	{
		header("location:quiz_login.php?run=failed");
	}

 ?>