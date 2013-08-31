<?php 
	session_start();
	include('get_wrkshps.inc.php');		
	if(!isset($_SESSION['username']))
	{
		header('Location: login.php');
		die();
	}
    if(!isset($_GET['input']) && !isset($_GET['starbru']) && !isset($_GET['cult']) && !isset($_GET['tech']))
	{
		include('workshop.inc.php');
		die();
	}
	else if(isset($_GET['input']))
	{		
		/*we have four workshops by MBS group.
		  wid describes the workshop.
		  1	=	AutoSpark.
		  2	= 	FullThrotal
		  3 =	Hackin2.0
		  4 = 	Wings
		 Uid is unique id of the student. date stores the date of workshop selected.
		 payment - 1 = dd, 2 = cash.
		 dno = dd no.
		 And since user have already logged in we have the list of workshops in the session variable.
		 
		 
	   	 create table mbs(wid int,uid varchar(100),date date,city text,venue text,slot text,payment text,dno text,primary key (wid,uid));
		*/
		  		require_once('db.inc.php'); 
		  		require_once('htmlout.inc.php');						  		
		  				  		
		  		$wid = sql(html($_POST['wid']),$link);
		  		$uid = $_SESSION['username'];
		  		$date = sql(html($_POST['date']),$link);
		  		$city = sql(html($_POST['city']),$link);
		  		$venue = sql(html($_POST['venue']),$link);
		  		$slot = sql(html($_POST['slot']),$link);
				$payment = sql(html($_POST['payment']),$link);
				$dno = sql(html($_POST['dno']),$link);
				
				
				
				$query = 'INSERT INTO mbs VALUES(\''.$wid.'\',\''.$uid.'\',\''.$date.'\',\''.$city.'\',\''.$venue.'\',\''.$slot.'\',\''.$payment.'\',\''.$dno.'\');';
				
				$res = mysqli_query($link,$query);

				if(!$res)
				{
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime. <br>You might have already registered.';
					include('error.inc.php');
					exit();
				}	
				header('Location:workshops.php');	
				exit();			
	}
	else if(isset($_GET['starbru']))
	{
		  		require_once('db.inc.php'); 
		  		require_once('htmlout.inc.php');
		  		$wid = sql(html($_POST['wid']),$link);
		  		$uid = $_SESSION['username'];
		  		$city = sql(html($_POST['city']),$link);
				$payment = sql(html($_POST['payment']),$link);
				$dno = sql(html($_POST['dno']),$link);
				$no_p = sql(html($_POST['no_p']),$link);
				
				if($no_p > 4)
				{
					$error = 'Team size can not exceed 4 for this event';
				}
				
				$query = 'INSERT INTO star VALUES(\''.$wid.'\',\''.$uid.'\',\''.$city.'\',\''.$payment.'\',\''.$dno.'\',\''.$no_p.'\');';		  		
				$res = mysqli_query($link,$query);
				if(!$res)
				{
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime. <br>You might have already registered.';
					include('error.inc.php');
					exit();
				}	
		    	header('Location:workshops.php');				
				/*
       		   	 create table star(wid int,uid varchar(100),city text,payment text,dno text,no_p int,primary key (wid,uid));
				*/
	}
	else if(isset($_GET['cult']))
	{
		  		require_once('db.inc.php'); 
		  		require_once('htmlout.inc.php');
		  		$uid = $_SESSION['username'];
		  		$wid = sql(html($_POST['wid']),$link);	
		  		$no_p = 0;	  		
				$query = 'Insert into cult values(\''.$uid.'\',\''.$wid.'\',\''.$no_p.'\');';
				$res = mysqli_query($link,$query);
				if(!$res)
				{	
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime. <br>You might have already registered.';
					include('error.inc.php');
					exit();
				}	
				header('Location:workshops.php');				
    /*
    	  		create table tech(uid varchar(100),wid int,no_p int,primary key (wid,uid));
	     		create table cult(uid varchar(100),wid int,no_p int,primary key (wid,uid));

	*/							
	}
	else if(isset($_GET['tech']))
	{
		  		require_once('db.inc.php'); 
		  		require_once('htmlout.inc.php');
		  		$uid = $_SESSION['username'];
		  		$wid = sql(html($_POST['wid']),$link);	
		  		$no_p = 0;	  		
				$query = 'Insert into tech values(\''.$uid.'\',\''.$wid.'\',\''.$no_p.'\');';
//				echo $query;
				$res = mysqli_query($link,$query);
				if(!$res)
				{	
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime. <br>You might have already registered.';
					include('error.inc.php');
					exit();
				}	
				header('Location:workshops.php');				
    /*
    	  		create table tech(uid varchar(100),wid int,no_p int,primary key (wid,uid));
	     		create table cult(uid varchar(100),wid int,no_p int,primary key (wid,uid));

	*/							
	}
	?>
