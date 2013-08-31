<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php 

		require_once('db.inc.php'); 
		
		$query = 'SELECT * from star';
		
		$res = mysqli_query($link,$query); 
		if(!$res)
		{
		 include('error.inc.php');
		} ?>
			<table style="width: 100%">
	<?php	
		while($row = mysqli_fetch_array($res))
		{?>
	   <tr>
		   <td><?php echo $row['wid']; ?></td>
		   <td><?php echo $row['uid']; ?></td>
		   <td><?php echo $row['city']; ?></td>
		   <td><?php echo $row['payment']; ?></td>
		   <td><?php echo $row['dno']; ?></td>
	   </tr>
 

<?php
		}
	
		

?>

  </table>
</body>

</html>
