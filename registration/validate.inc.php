<?php
	  			if(empty($name))
		  		{
		  			$name = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}
		  		if(empty($insti))
		  		{
		  			$insti = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}
		  		if(empty($contact))
		  		{
		  			$contact = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}
		  		if(!is_numeric($contact))
		  		{
		  			$contact = "Should be numeric";
		  			include('reg_wrkshp.php');
		  			exit();
		  			
		  		}
		  		if(empty($email))
		  		{
		  			$email = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}
		  		if(empty($sem))
		  		{
		  			$sem = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}
		  		if(empty($branch))
		  		{
		  			$branch = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}
		  		if(empty($uid))
		  		{
		  			$uid = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}
		  		if(empty($pass))
		  		{
		  			$pass = "Can not be empty.";
		  			include('reg_wrkshp.php');
		  			exit();
		  		}		  		
?>