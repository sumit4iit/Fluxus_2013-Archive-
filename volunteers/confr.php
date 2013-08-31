<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Confirm</title>
<style>

body
{
	font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	font-weight:lighter;
}


</style>

</head>

<?php 

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
		
?>

<body style="background-color:gray;padding-left:100px;padding-right:100px; padding-top:0px;padding-bottom:0px;">

<div style="background-color:white;margin:0px;padding-left:10px;">
	<h1>Registration for volunteers: FLUXUS 2013</h1>
	<div id="form" style="padding-left:20px;" >
	
	<p>Please Confirm the data you entered.</p>
	
	<form method="post" action="process_reg.php">
	
	
		<table style="width: 100%;border-collapse:collapse; ">
			<tr>
				<td>Name</td>
				<td><input name="name" type="text" maxlength="10" value="<?php echo $name ?>" /></td>
			</tr>
			<tr>
				<td>Roll No.</td>
				<td><input name="roll" type="text" maxlength="10" value="<?php echo $roll ?>" /></td>
			</tr>
			<tr>
				<td>Branch</td>
				<td><input name="branch" type="text" maxlength="10" value="<?php echo $branch ?>" /></td>
			</tr>
			<tr>
				<td>Year</td>
				<td><input name="year" type="text" maxlength="10"  value="<?php echo $year ?>" /></td>
			</tr>
			<tr>
				<td>Mobile No.</td>
				<td><input name="mobile" type="text" maxlength="10"  value="<?php echo $mobile ?>" /></td>
			</tr>
			<tr>
				<td>Email id.(Gmail preferred)</td>
				<td><input name="email" type="text" maxlength="80"  value="<?php echo $email ?>"/></td>
			</tr>
			<tr>
				<td>Committee</td>			
				<td><input name="com" type="text" maxlength="80"  value="<?php echo $committee ?>"/></td>
			</tr>
		</table>
			<input name="submit" type="submit" value="submit" />	
	</form>
	</div>
	
	
</div>

</body>

</html>
