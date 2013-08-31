<?php
 session_start();
 
 if(!isset($_POST['username']) && !isset($_SESSION['username']))
 {
 	require_once('login.inc.php');
 	exit();
 }
 else if(isset($_POST['username']))
 {
	 require_once('db.inc.php'); 
	 require_once('htmlout.inc.php');
	 
	 $username = sql(html($_POST['username']),$link);
	 
	 $pass = sql(html($_POST['pass']),$link);
	 
	 
	 if($pass == '' || $username == '')
	 {
	 	header('Location:login.php');
	 	exit();
	 }
	 $query = 'select pass,name from users where uid =\'' .$username .'\'';
	 $res = mysqli_query($link,$query);
	 
	 if(!$res)
	 {
	 	$error = 'DB_connError: OOPs something went wrong!! We are trying to fix this issue. Please try after sometime';
	 	include('error.inc.php');	 	
	 	exit();
	 }
	 $stored_pass = NULL;
	 $name = NULL;
	 while($row = mysqli_fetch_array($res))
	 {
	 	$stored_pass = $row['pass'];
	 	$name = $row['name'];
	 }	 
	 if($pass == $stored_pass)
	 {


		$_SESSION['name'] = $name;
		$_SESSION['username'] = $username;
		//get the list of workshops user have already registered into session variable.
//		include('get_wrkshps.inc.php');		
	    	header('Location: workshops.php');
	 }
	 else
	 {
	 	$error = "LOGIN FAILED.. <a href='login.php' style=\"text-decoration:none;\">Retry</a>";
		include('error.inc.php');
	 }
 }
 else if(isset($_SESSION['username']))
 {
 	header('Location: workshops.php');
 }
 
?>
