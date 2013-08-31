<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" href="file:///J:/favicon.ico"/>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=1024" />
	<meta name="keywords" content="fluxus , iiti , indian institute of technology indore, 2013 , cult fest, tech fest, home"/>
	<meta name="description" content="Indian Institute of Technology Indore's Techno-Cultural Festival - 2013"/>
	<meta name="author" content="Gagan and Sumit" />
<title>Respect for Women</title>
</head>

<body style="margin:auto;padding:0px;border:0px;background:#222222 url('bg.jpg') no-repeat fixed center;font-family:calibri;cursor:default;width:400px;" ondragstart="return false" onselectstart="return false">

<div style="margin:auto;padding:0px;border:0px;background-color:#000000;opacity:0.6;">
	<div style="width:400px;margin:auto;padding:0px;border:0px;opacity:1;">
	<center><img src="f13pop.png" alt="FLUXUS 2013" height=100></img></center>
	</div>
</div>
<style>
p.head2{
	font-size:20px;
	color:#FFFFFF;
	text-shadow:3px 3px 3px #000;
	margin:0px;
	padding:5px;
	background:rgba(0,0,0,0.2);
	}
p {
	font-size:20px;
	color:#FFFFFF;
	text-shadow:3px 3px 3px #000;
	margin:10px 0px 10px 0px;
	}
body {
	font-size:20px;
	color:#FFFFFF;
	text-shadow:3px 3px 3px #000;
	}
</style>
<center><p class="head2">Join us for this noble cause.</p></center>
<center>
<?php
	        if(!isset($_GET['validate'])){ 
				require_once('marathonjoin.inc.php');
				exit();
			}
			else if(isset($_GET['validate'])){
				require_once('recaptchalib.php');
				$privatekey = "6LfBzNsSAAAAAAu_wBy8pZtSZyfB3EoxsZwGBIKO";
				$resp = recaptcha_check_answer ($privatekey,
		                                $_SERVER["REMOTE_ADDR"],
		                                $_POST["recaptcha_challenge_field"],
		                                $_POST["recaptcha_response_field"]);
				  if (!$resp->is_valid) 
				  {
							
							$caperr = "The reCAPTCHA wasn't entered correctly. Please Try Again.";
							echo $caperr;
							exit();
				  }
				  else
				  {
							require_once('htmlout.inc.php');
							require_once('db.inc.php'); 
							$query = "select joined from marathon;";
							$res = mysqli_query($link, $query);
							if(!$res)
							{
								echo 'Oops, error occurred. We are trying to fix this.';
								exit();
							}
							$joined = 0;
							while($row = mysqli_fetch_array($res))		  		
							{
								$joined =$row['joined'];
							}
							$joined++;
							$query = 'update marathon SET joined = '.$joined.';';
							$res = mysqli_query($link, $query);
							if(!$res)
							{
								echo 'Oops, error occurred. We are trying to fix this.';
								exit();
							}
					echo "<br>Thank you for your support.";

				  }
			}
?>
</center>
<center><p class="head2" style="position:fixed;bottom:0px;width:390px;font-size:13px;text-align:right;padding-right:10px;">Contact Us: Shashikant Agrawal (+91-8305214945)</p></center>

</body>
</html>