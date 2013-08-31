<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" href="favicon.ico"/>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=1024" />
	<meta name="keywords" content="fluxus , iiti , indian institute of technology indore, 2013 , cult fest, tech fest, home"/>
	<meta name="description" content="Indian Institute of Technology Indore's Techno-Cultural Festival - 2013"/>
	<meta name="author" content="Gagan and Sumit" />

<title>FluXstration</title>
 
</head>
<body style="margin:auto;padding:0px;border:0px;background:#222222 url('bg.jpg') repeat fixed center;font-family:calibri;cursor:default;" ondragstart="return false" onselectstart="return false">

<div style="margin:auto;padding:0px;border:0px;background-color:#000000;opacity:0.6;">
	<div style="width:400px;margin:auto;padding:0px;border:0px;opacity:1;">
	<center><a href="http://www.fluxus.in"><img src="f13pop.png" alt="FLUXUS 2013" height=100></img></a></center>
	</div>
</div>

<div style="margin:auto;padding:0px;border:0px;background-color:#511a28;opacity:0.4;">
	<div style="width:400px;margin:auto;padding:0px;border:0px;opacity:1;">
	<center><p style="margin:auto;padding:0px;border:0px;font-size:40px;color:#FFFFFF;">Join Us</p></center>
	</div>
</div>
<style>
a{text-decoration:none;}
a:active{color:#888888;}
a:hover{color:#FFFFFF;}
a:link{color:#00FF00;}
a:visited{color:#00FF00;}
</style>


<script>

function checkall() {
var x=0;
if( document.frm.name.value == "" || document.frm.name.value == null){x=1;alert('Please enter Name');document.getElementById('name').focus();}
else if( document.frm.insti.value == "" || document.frm.insti.value==null){x=1;alert('Please enter Name of the Institute');document.getElementById('insti').focus();}
else if( document.frm.contact.value == "" || document.frm.contact.value==null){x=1;alert('Please enter Contact No.');document.getElementById('contact').focus();}
else if( document.getElementById('emailid').value == "" || document.getElementById('emailid').value==null){x=1;alert('Please enter email id.');document.getElementById('emailid').focus();}
else if( document.frm.sem.value == "" || document.frm.sem.value==null){x=1;alert('Please enter Semester');document.getElementById('sem').focus();}
else if( document.frm.branch.value == "" || document.frm.branch.value==null){x=1;alert('Please enter Branch');document.getElementById('branch').focus();}
else if( document.frm.uid.value == "" || document.frm.uid.value==null){x=1;alert('Please enter UserID');document.getElementById('uid').focus();}
else if( document.getElementById('password').value == "" || document.getElementById('password').value==null){x=1;alert('Please enter password');document.getElementById('password').focus();}

if(x==1){return false;}

}

function concheck(x){
			var val = x.value;
			if(val - 0 == val && val.length >= 10){}
			else{x.value = null;alert('Please enter a valid Contact No.');}
			}

</script>
<div style="margin:auto;padding:0px;border:0px;">
<center>

<div style="width:400px;margin:auto;padding:0px;border:0px;opacity:1;">
<p style="padding:10px;color:#00FF00;text-align:right;background:rgba(0,0,0,0.3);"><a href="login.php">SignIN</a></p>
<form method="post" action="?validate" name="frm" onsubmit="return checkall()">
	<style>
	td {
		text-align:right;
		text-decoration:bold;
		font-size:20px;
		color:#FFFFFF;
		}
	p {
		color:#FF0000;
		}
	</style>
	
	<table style="text-shadow:4px 4px 2px #000;">
		<tr>
			<td>Name</td><td style="width:20px;"></td>
			<td><input type="text" name="name" id="name" value="<?php echo $name?>" /></td>
		</tr>
		<tr>
			<td>Institute</td><td style="width:20px;"></td>
			<td><input type="text" name="insti" id="insti" value="<?php echo $insti?>" /></td>
		</tr>
		<tr>
			<td>Contact No.</td><td style="width:20px;"></td>
			<td><input type="text" name="contact" id="contact" onblur="concheck(this)" value="<?php echo $contact?>" /></td>
		</tr>
		<tr>
			<td>Email ID</td><td style="width:20px;"></td>
			<td><input type="email" name="email" id="emailid" value="<?php echo $email?>" /></td>
		</tr>
		<tr>
			<td>Semester</td><td style="width:20px;"></td>
			<td><input type="text" name="sem" id="sem" value="<?php echo $sem?>"/></td>
		</tr>
		<tr>
			<td>Branch</td><td style="width:20px;"></td>
			<td><input type="text" name="branch" id="branch" value="<?php echo $branch?>"/></td>
		</tr>
		<tr>
			<td>User ID</td><td style="width:20px;"></td>
			<td><input type="text" name="uid" id="uid" value="<?php echo $uid?>" /></td>
		</tr>
		<tr>
			<td>Password</td><td style="width:20px;"></td>
			<td><input type="password" name="pass" id="password" /></td>
		</tr>
	</table>
	 <br></br>
	 <?php
	          require_once('recaptchalib.php');
	          $publickey = "6LfBzNsSAAAAANti2PuFgQIA5DLiLB-htAOIrG1Q"; // you got this from the signup page
	          echo recaptcha_get_html($publickey);
			  echo "<p>".$caperr."</p>";
     ?>
	 
	 <input type="submit" value="Submit" id="subm" title="Please fill all the fields"/>
	 <br></br>
</form>
</div>
</center>
</div>
</body>

</html>
