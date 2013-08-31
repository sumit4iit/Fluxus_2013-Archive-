<?php 

session_start();
	
	if(isset($_SESSION['username']))
		unset($_SESSION['username']);
	if(isset($_SESSION['auto']))
		unset($_SESSION['auto']);
	if(isset($_SESSION['name']))
		unset($_SESSION['name']);
	if(isset($_SESSION['full']))
		unset($_SESSION['full']);
	if(isset($_SESSION['hack']))
		unset($_SESSION['hack']);
	if(isset($_SESSION['wings']))
		unset($_SESSION['wings']);
	if(isset($_SESSION['af13']))
		unset($_SESSION['af13']);
	if(isset($_SESSION['techd']))
		unset($_SESSION['techd']);
	if(isset($_SESSION['rblaze']))
		unset($_SESSION['rblaze']);
	if(isset($_SESSION['imgrn']))
		unset($_SESSION['imgrn']);
		
	if(isset($_SESSION['mun']))
		unset($_SESSION['mun']);
	if(isset($_SESSION['tr']))
		unset($_SESSION['tr']);
	if(isset($_SESSION['drama']))
		unset($_SESSION['drama']);
	if(isset($_SESSION['stunt']))
		unset($_SESSION['stunt']);
	if(isset($_SESSION['dance']))
		unset($_SESSION['dance']);
	if(isset($_SESSION['quiz']))
		unset($_SESSION['quiz']);
	if(isset($_SESSION['civil']))
		unset($_SESSION['civil']);
	if(isset($_SESSION['elecD']))
		unset($_SESSION['elecD']);
	if(isset($_SESSION['divO']))
		unset($_SESSION['divO']);
	if(isset($_SESSION['dungB']))
		unset($_SESSION['dungB']);
	if(isset($_SESSION['robo1']))
		unset($_SESSION['robo1']);
	if(isset($_SESSION['aero']))
		unset($_SESSION['aero']);
	if(isset($_SESSION['robo1']))
		unset($_SESSION['robo1']);
	if(isset($_SESSION['armada']))
		unset($_SESSION['armada']);
	if(isset($_SESSION['roboS']))
		unset($_SESSION['roboS']);
	if(isset($_SESSION['roboG']))
		unset($_SESSION['roboG']);
	if(isset($_SESSION['techP']))
		unset($_SESSION['techP']);
		
session_destroy();		
		
header('Location: login.php');	
?>