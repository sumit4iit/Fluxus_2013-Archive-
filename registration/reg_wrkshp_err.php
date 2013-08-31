<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
<body>
<form method="post" action="?validate">
	
	<table style="width: 100%">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $name?>" /></td>
		</tr>
		<tr>
			<td>Institute</td>
			<td><input type="text" name="insti" value="<?php echo $insti?>"/></td>
		</tr>
		<tr>
			<td>Contact. No</td>
			<td><input type="text" name="contact" value="<?php echo $contact?>"/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $email?>"/></td>
		</tr>
		<tr>
			<td>Sem</td>
			<td><input type="text" name="sem" value="<?php echo $sem?>"/></td>
		</tr>
		<tr>
			<td>Branch</td>
			<td><input type="text" name="branch" value="<?php echo $branch?>"/></td>
		</tr>
		<tr>
			<td>User Id.</td>
			<td><input type="text" name="uid" value="<?php echo $uid?>"/></td>
		</tr>
		<tr>
			<td>Password.</td>
			<td><input type="password" name="pass" /></td>
		</tr>
	</table>
	 <?php
/*	          require_once('recaptchalib.php');
	          $publickey = "6LfBzNsSAAAAANti2PuFgQIA5DLiLB-htAOIrG1Q"; // you got this from the signup page
	          echo recaptcha_get_html($publickey);
  */   ?>
	<input type="submit" value="Submit" />
</form>
</body>

</html>
