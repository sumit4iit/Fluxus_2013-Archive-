<br>
<form action="?validate" method="POST">
<?php 
				require_once('htmlout.inc.php');
				require_once('db.inc.php'); 
				$query = "select joined from marathon;";
				$res = mysqli_query($link, $query);
				if(!$res)
				{
					echo 'Oops, error occurred. We are trying to fix this.';
					exit();
				}
				$joined = 0;
				while($row = mysqli_fetch_array($res))		  		
				{
					$joined =$row['joined'];
				}
				
				echo $joined." already joined us.<br><br>";
				
				require_once('recaptchalib.php');
				$publickey = "6LfBzNsSAAAAANti2PuFgQIA5DLiLB-htAOIrG1Q"; // you got this from the signup page
				echo recaptcha_get_html($publickey);
				echo $caperr;

?>

<input type="submit" Value="COUNT ME IN" />
</form>
<center><p class="head2" style="position:fixed;bottom:0px;width:390px;font-size:13px;text-align:right;padding-right:10px;">Contact Us: Shashikant Agrawal (+91-8305214945)</p></center>
