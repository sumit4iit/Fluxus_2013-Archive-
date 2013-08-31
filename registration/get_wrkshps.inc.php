<?php			session_start();
				require_once('db.inc.php');
		
				$query = 'SELECT wid FROM mbs WHERE uid =\''. $_SESSION['username'] .'\'';
				$res = mysqli_query($link,$query);
				if(!$res)
				{
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime.';
					include('error.inc.php');
					exit();
				}	
				else
				{
   					 $registered = array();
   					 $i = 0;
					 while($row = mysqli_fetch_array($res))
					 {
					 	$registered[$i] = $row['wid'];
					 	$i = $i+1;
					 }	 
	   				foreach($registered as $wrkshp)
	   				{
	   					if($wrkshp == 1) 
	   					$_SESSION['auto'] = true;
	  
	 					else if($wrkshp == 2)
	   					$_SESSION['full'] = true;
	
	   					else if($wrkshp == 3)
	   					$_SESSION['hack'] = true;
	
	   					else if($wrkshp == 4) 
	   					$_SESSION['wings'] = true;
						
						else if($wrkshp == 24) 
	   					$_SESSION['af13'] = true;
						
						else if($wrkshp == 25) 
	   					$_SESSION['techd'] = true;
	   				}
	   			}
				$query = 'SELECT wid FROM star WHERE uid =\''. $_SESSION['username'] .'\'';
				$res = mysqli_query($link,$query);
				if(!$res)
				{	
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime.';
					include('error.inc.php');
					exit();
				}	
				else
				{	
   					$registered = array();
   					$i = 0;
					while($row = mysqli_fetch_array($res))
					{
						$registered[$i] = $row['wid'];
						$i = $i+1;
					}	 
	   				foreach($registered as $wrkshp)
	   				{
	   					if($wrkshp == 5) 
	   					$_SESSION['imgrn'] = true;
	  				
	 					else if($wrkshp == 6)
	   					$_SESSION['rblaze'] = true;
	   				}
	   			}	
				$query = 'SELECT wid FROM cult WHERE uid =\''. $_SESSION['username'] .'\'';
				$res = mysqli_query($link,$query);
				if(!$res)
				{	
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime.';
					include('error.inc.php');
					exit();
				}	
				else
				{	
   					$registered = array();
   					$i = 0;
					while($row = mysqli_fetch_array($res))
					{
						$registered[$i] = $row['wid'];
						$i = $i+1;
					}	 
	   				foreach($registered as $wrkshp)
	   				{
	   					if($wrkshp == 18) 
	   					$_SESSION['mun'] = true;
	   					if($wrkshp == 19) 
	   					$_SESSION['tr'] = true;
	   					if($wrkshp == 20) 
	   					$_SESSION['drama'] = true;
	   					if($wrkshp == 21) 
	   					$_SESSION['stunt'] = true;
	   					if($wrkshp == 22) 
	   					$_SESSION['dance'] = true;
	   					if($wrkshp == 23) 
	   					$_SESSION['quiz'] = true;
	   				}
	   			}	
				$query = 'SELECT wid FROM tech WHERE uid =\''. $_SESSION['username'] .'\'';
				$res = mysqli_query($link,$query);
				if(!$res)
				{	
					$error = 'DB:Error. Something went wrong!! We are trying to fix this. Please try after sometime.';
					include('error.inc.php');
					exit();
				}	
				else
				{	
   					$registered = array();
   					$i = 0;
					while($row = mysqli_fetch_array($res))
					{
						$registered[$i] = $row['wid'];
						$i = $i+1;
					}	 
	   				foreach($registered as $wrkshp)
	   				{
	   					if($wrkshp == 7) 
	   					$_SESSION['civil'] = true;
	   					if($wrkshp == 8) 
	   					$_SESSION['elecD'] = true;
	   					if($wrkshp == 9) 
	   					$_SESSION['divO'] = true;
	   					if($wrkshp == 10) 
	   					$_SESSION['dungB'] = true;
	   					if($wrkshp == 11) 
	   					$_SESSION['aero'] = true;
	   					if($wrkshp == 12) 
	   					$_SESSION['robo1'] = true;
	   					if($wrkshp == 13) 
	   					$_SESSION['roboA'] = true;
	   					if($wrkshp == 14) 
	   					$_SESSION['armada'] = true;
	   					if($wrkshp == 15) 
	   					$_SESSION['roboS'] = true;
	   					if($wrkshp == 16) 
	   					$_SESSION['roboG'] = true;
	   					if($wrkshp == 17) 
	   					$_SESSION['techP'] = true;
	   				}
	   			}
?>