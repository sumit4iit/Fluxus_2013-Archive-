<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style>
body
{
}
</style>
</head>

<body>

<?php 

		require_once('db.inc.php'); 		
		$query = 'SELECT wid, city, name, star.uid, insti, contact, email, sem, branch, payment, dno
					FROM star, users
					WHERE users.uid = star.uid
					ORDER BY wid ASC';		
		$res = mysqli_query($link,$query); 
		if(!$res)
		{
		 include('error.inc.php');
		} ?>
			<table style="overflow:scroll;">
			<tr>
			<td><b>Name</b></td>
			<td><b>wid</b></td>
			<td><b>city</b></td>
			<td><b>pay</b></td>
			<td><b>dno</b></td>
			<td><b>cont</b></td>
			<td><b>email</b></td>
			<td><b>insti</b></td>
			<td><b>sem</b></td>
			<td><b>branch</b></td>
			</tr>
	<?php	
		while($row = mysqli_fetch_array($res))
		{?>
	   <tr>
		   <td><?php echo $row['name']; ?></td>
		   <td><?php echo $row['wid']; ?></td>
		   <td><?php echo $row['city']; ?></td>
		   <td><?php echo $row['payment']; ?></td>
		   <td><?php echo $row['dno']; ?></td>
		   <td><?php echo $row['contact']; ?></td>
		   <td><?php echo $row['email']; ?></td>
		   <td><?php echo $row['insti']; ?></td>
		   <td><?php echo $row['sem']; ?></td>
		   <td><?php echo $row['branch']; ?></td>
	   </tr>
 

<?php
		}
	
		

?>

  </table>
</body>

</html>
