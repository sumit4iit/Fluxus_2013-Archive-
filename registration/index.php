<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" href="favicon.ico"/>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=1024" />
	<meta name="keywords" content="fluxus , iiti , indian institute of technology indore, 2013 , cult fest, tech fest, home"/>
	<meta name="description" content="Indian Institute of Technology Indore's Techno-Cultural Festival - 2013"/>
	<meta name="author" content="Gagan and Sumit" />

<title>FLUXUS 2013</title>
</head>
<?php 
	
	if(!isset($_POST['name']))
	{
		include('reg_wrkshp.php');
		exit();
	}
	//code to check wheather the captcha was entered successfully or not. 
	//And check wheather the inputs followed constraints. 
	if(isset($_GET['validate']))
	{ 
		  
		  require_once('recaptchalib.php');
		  $privatekey = "6LfBzNsSAAAAAAu_wBy8pZtSZyfB3EoxsZwGBIKO";
		  $resp = recaptcha_check_answer ($privatekey,
		                                $_SERVER["REMOTE_ADDR"],
		                                $_POST["recaptcha_challenge_field"],
		                                $_POST["recaptcha_response_field"]);
		  if (!$resp->is_valid) 
		  {
					
 			    	$caperr = "The reCAPTCHA wasn't entered correctly. Please Try Again.";     
					include('reg_wrkshp.php');
					exit();
		  }
		  else 
		  {
		  		//sanitize input!!
		  		require_once('htmlout.inc.php');
						  		
		  		// get connected!!
		  		require_once('db.inc.php'); 

		  		$name = sql(html($_POST['name']),$link);
		  		$insti = sql(html($_POST['insti']),$link);
		  		$contact = sql(html($_POST['contact']),$link);
		  		$email = sql(html($_POST['email']),$link);
		  		$sem = sql(html($_POST['sem']),$link);
		  		$branch = sql(html($_POST['branch']),$link);
		  		$uid = sql(html($_POST['uid']),$link);
		  		$pass = sql(html($_POST['pass']),$link);

				//validtate and display corrosponding error page.
				/*Note this should be done on front end of the website. 
				  But in case of attack we should not leave any loophole.
				  Front end is left for Gagan.
				*/
						
				include('validate.inc.php');
		  		$query = 'select count(uid) as count from users where uid =\''. $uid .'\'';
		  		$res = mysqli_query($link, $query);
		  		if(!$res)
		  		{
		  			$error = 'CONN:Error in connection. Please try after sometime. ';
		  			include('error.inc.php');
		  			exit();
		  		}		  		
		  		while($row = mysqli_fetch_array($res))		  		
		  		{
		  			if($row['count'] > 0)
		  			{
		  				$uid = 'Not Available';
		  				include('reg_wrkshp.php');
		  				exit();
		  			}
		  		}
		  		//$pass = crypt($pass,'s4i'); // password is hashed. With salt = s4i. Hehe digital footprint!! 

		  		$query = 'INSERT INTO users VALUES(\''. $name .'\' , \''.$insti.'\' , \''.$contact.'\' , \''.$email.'\' , \''.$sem.'\' , \''.$branch.'\' , \''.$uid.'\' , \''.$pass. '\' );';
				//echo $query;
		  		$res = mysqli_query($link,$query);
		  		if(!$res)
		  		{
		  			$error = "Error in query.\n";
		  			include('error.inc.php');
		  			exit();
		  		}
		  		header('Location : login.php');
		    // Your code here to handle a successful verification
		  }
	}

?>
<body>

</body>

</html>
