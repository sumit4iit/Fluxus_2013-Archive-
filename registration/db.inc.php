<?php

		$link = mysqli_connect('118.139.179.53','fluxreg','Incorrect13!');
	  	//$link = mysqli_connect('localhost','root','');
	  	if(!$link)
	  	{
	  		$error = "conn_Server Error: Please try after sometime and report this issue to sumit@iiti.ac.in. Apologies for the inconvience caused. " ;
	  		include('error.inc.php'); 
	  	}
	  	
	  	//Do not forget to change the database.
	  	$res = mysqli_select_db($link,'fluxreg');
	  	//$res = mysqli_select_db($link,'mysql');
	  	if(!$res)
	  	{
	  		$error = "db_Server Error: Please try after sometime and report this issue to sumit@iiti.ac.in. Apologies for the inconvience caused. " ; 
			include('error.inc.php'); 
	 	}

	//	$link->autocommit(FALSE);
		//echo "succs";
 ?>