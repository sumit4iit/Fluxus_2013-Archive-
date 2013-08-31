<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Process_database</title>


<style type="text/css">
body
{
	margin:0px;
	padding:0px;
	background:gray;	
	font-weight:normal;
	font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}
h1
{
	color:red;
	font-weight:normal;
	font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
	font-variant:small-caps;
	font-size:large;
}
td
{
	border:thin;
	border-collapse:collapse;
	border-bottom-color:black;
	
}
tr
{
	border:thin;
	border-collapse:collapse;
	border-bottom-color:black;
	
}

#container
{
	background:white;	
	margin-left:200px;
	margin-right:200px;
}

</style>


</head>

<body>

<div id="container">
	<h1>FLUXUS @)!#</h1>
	<h1> Welcome Admin!! </h1>
	
	<hr></hr>
	
	<h1> Details of volunteers !!</h1>
	<?php 

	$link = mysqli_connect('118.139.179.53','fluxreg','Incorrect13!');
 	$res = mysqli_select_db($link,'fluxreg');
//	$link = mysqli_connect('localhost','root','root');
//  	$res = mysqli_select_db($link,'mysql');
	if(!$link)
	{
		echo 'error in connection with host.';
	}
	if(!$res)
	{
		echo 'error in conn _ db';
	}
//	$link = mysqli_connect('118.139.179.53','fluxreg','Incorrect13!');
// 	$res = mysqli_select_db($link,'fluxreg');
	$query_I = 'SELECT * FROM reg WHERE year = \'I\' ;';
	$query_II ='SELECT * FROM reg WHERE year = \'II\' ;';
	$query_III ='SELECT * FROM reg WHERE year = \'III\' ;';
	$query_IV = 'SELECT * FROM reg WHERE year = \'IV\' ;';
	$query_PHD ='SELECT * FROM reg WHERE year = \'PHD\' ;';
//	echo $query_I;
	$result_I = mysqli_query($link,$query_I);
	$result_II  = mysqli_query($link,$query_II);
	$result_III = mysqli_query($link,$query_III);
	$result_IV = mysqli_query($link,$query_IV);
	$result_PHD = mysqli_query($link,$query_PHD);

	if(!result_I)
		echo 'error';
	if(!result_II)
		echo 'error';
	if(!result_III)
		echo 'error';
	if(!result_IV)
		echo 'error';
	if(!result_PHD)
		echo 'error';


	?>
	
	
		
	<h1> First Year </h1>
	
	<table style="width: 100%;border-collapse:collapse;border-style:solid;border-width:thin;border-color:black;">
		<tr>
			<td><b>Name</b></td>
			<td><b>Roll</b></td>
			<td><b>Branch</b></td>
			<td><b>Year</b></td>
			<td><b>Mobile</b></td>
			<td><b>Email</b></td>
			<td><b>Committee</b></td>
		</tr>
		<?php while($row = mysqli_fetch_array($result_I)){ ?>
		<tr>
			<td><?php echo htmlspecialchars($row['name']) ?></td>
			<td><?php echo htmlspecialchars($row['roll']) ?></td>
			<td><?php echo htmlspecialchars($row['branch']) ?></td>
			<td><?php echo htmlspecialchars($row['year']) ?></td>
			<td><?php echo htmlspecialchars($row['mobile']) ?></td>
			<td><?php echo htmlspecialchars($row['email']) ?></td>
			<td><?php echo htmlspecialchars($row['committee']) ?></td>
		</tr>
		<?php } ?>
	</table>
	
	<hr></hr>
	<h1> Second Year </h1>
	
	<table style="width: 100%;border-collapse:collapse;border-style:solid;border-width:thin;border-color:black;">
		<tr>
			<td><b>Name</b></td>
			<td><b>Roll</b></td>
			<td><b>Branch</b></td>
			<td><b>Year</b></td>
			<td><b>Mobile</b></td>
			<td><b>Email</b></td>
			<td><b>Committee</b></td>
		</tr>
		<?php while($row = mysqli_fetch_array($result_II)){ ?>
		<tr>
			<td><?php echo htmlspecialchars($row['name']) ?></td>
			<td><?php echo htmlspecialchars($row['roll']) ?></td>
			<td><?php echo htmlspecialchars($row['branch']) ?></td>
			<td><?php echo htmlspecialchars($row['year']) ?></td>
			<td><?php echo htmlspecialchars($row['mobile']) ?></td>
			<td><?php echo htmlspecialchars($row['email']) ?></td>
			<td><?php echo htmlspecialchars($row['committee']) ?></td>
		</tr>
		<?php } ?>
	</table>
	
	<hr></hr>
	<h1> Third Year </h1>
	
	<table style="width: 100%;border-collapse:collapse;border-style:solid;border-width:thin;border-color:black;">
		<tr>
			<td><b>Name</b></td>
			<td><b>Roll</b></td>
			<td><b>Branch</b></td>
			<td><b>Year</b></td>
			<td><b>Mobile</b></td>
			<td><b>Email</b></td>
			<td><b>Committee</b></td>
		</tr>
		<?php while($row = mysqli_fetch_array($result_III)){ ?>
		<tr>
			<td><?php echo htmlspecialchars($row['name']) ?></td>
			<td><?php echo htmlspecialchars($row['roll']) ?></td>
			<td><?php echo htmlspecialchars($row['branch']) ?></td>
			<td><?php echo htmlspecialchars($row['year']) ?></td>
			<td><?php echo htmlspecialchars($row['mobile']) ?></td>
			<td><?php echo htmlspecialchars($row['email']) ?></td>
			<td><?php echo htmlspecialchars($row['committee']) ?></td>
		</tr>
		<?php } ?>
	</table>
	<hr></hr>
	<h1> Fourth Year </h1>
	
	<table style="width: 100%;border-collapse:collapse;border-style:solid;border-width:thin;border-color:black;">
		<tr>
			<td><b>Name</b></td>
			<td><b>Roll</b></td>
			<td><b>Branch</b></td>
			<td><b>Year</b></td>
			<td><b>Mobile</b></td>
			<td><b>Email</b></td>
			<td><b>Committee</b></td>
		</tr>
		<?php while($row = mysqli_fetch_array($result_IV)){ ?>
		<tr>
			<td><?php echo htmlspecialchars($row['name']) ?></td>
			<td><?php echo htmlspecialchars($row['roll']) ?></td>
			<td><?php echo htmlspecialchars($row['branch']) ?></td>
			<td><?php echo htmlspecialchars($row['year']) ?></td>
			<td><?php echo htmlspecialchars($row['mobile']) ?></td>
			<td><?php echo htmlspecialchars($row['email']) ?></td>
			<td><?php echo htmlspecialchars($row['committee']) ?></td>
		</tr>
		<?php } ?>
	</table>
	<hr></hr>
	<h1> PHD Year </h1>
	
	<table style="width: 100%;border-collapse:collapse;border-style:solid;border-width:thin;border-color:black;">
		<tr>
			<td><b>Name</b></td>
			<td><b>Roll</b></td>
			<td><b>Branch</b></td>
			<td><b>Year</b></td>
			<td><b>Mobile</b></td>
			<td><b>Email</b></td>
			<td><b>Committee</b></td>
		</tr>
		<?php while($row = mysqli_fetch_array($result_PHD)){ ?>
		<tr>
			<td><?php echo htmlspecialchars($row['name']) ?></td>
			<td><?php echo htmlspecialchars($row['roll']) ?></td>
			<td><?php echo htmlspecialchars($row['branch']) ?></td>
			<td><?php echo htmlspecialchars($row['year']) ?></td>
			<td><?php echo htmlspecialchars($row['mobile']) ?></td>
			<td><?php echo htmlspecialchars($row['email']) ?></td>
			<td><?php echo htmlspecialchars($row['committee']) ?></td>
		</tr>
		<?php } ?>
	</table>
	
	
</div>


</body>

</html>
