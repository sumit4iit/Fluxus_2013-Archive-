<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration Fluxus13</title>
</head>

<body>
<?php
	
	try
	{
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$branch = $_POST['branch'];
		$year = $_POST['year'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$committee = $_POST['com'];
		
		$name = htmlspecialchars($name,ENT_QUOTES);
		$roll = htmlspecialchars($roll,ENT_QUOTES);
		$branch = htmlspecialchars($branch,ENT_QUOTES);
		$year = htmlspecialchars($year,ENT_QUOTES);
		$mobile = htmlspecialchars($mobile,ENT_QUOTES);
		$email = htmlspecialchars($email,ENT_QUOTES);
		$committee = htmlspecialchars($committee,ENT_QUOTES);
		
		
		//Do not forget to change host user and pass settings.
		$link = mysqli_connect('118.139.179.53','fluxreg','Incorrect13!');
	  	if(!$link)
	  	{
	  		echo 'conn_Server Error: Please try after sometime and report this issue to sumit@iiti.ac.in. Apologies for the inconvience caused. ' ; 
	  	}
	  	
	  	//Do not forget to change the database.
	  	$res = mysqli_select_db($link,'fluxreg');
	  	if(!$res)
	  	{
	  		echo 'db_Server Error: Please try after sometime and report this issue to sumit@iiti.ac.in. Apologies for the inconvience caused. ' ; 
	  	}
	  	
	  	$query = 'INSERT INTO reg VALUES(\''. $name .'\' , \''.$roll.'\' , \''.$branch.'\' , \''.$year.'\' , \''.$mobile.'\' , \''.$email.'\' , \''.$committee. '\' );';
		//echo $query;  
		$res = mysqli_query($link,$query);
	  	
	  //	echo $query;
	  	
	  	if(!$res)
	  	{
	  		echo 'Error occurred. You can not register twice. Please report this issue to sumit@iiti.ac.in.' ; 
	  	}
  		else
  		{
  		 echo 'Registration Successful. Thank you.'; 
  		}
	}
	catch(Exception $e)
	{
  		echo 'Server Error: Please try after sometime and report this issue to sumit@iiti.ac.in. Apologies for the inconvience caused. ' ; 
	}  
	
	
?>


</body>

</html>
