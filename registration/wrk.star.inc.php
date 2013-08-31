<style>
	td {
		text-align:right;
		text-decoration:bold;
		font-size:20px;
		color:#FFFFFF;
		text-shadow:3px 3px 3px #000;
		}
</style>

<form method="post" action="?starbru" id="" onsubmit="return ddcheck('<?php echo 'dd'.$wid; ?>')">
	<input name="wid" type="hidden" value ="<?php echo $wid ;?>">
	<table>
		<tr>
			<td>Location</td><td style="width:20px;"></td>
			<td>
			
			<select name="city" style="width:150px;">
			<option selected="selected" disabled="disabled">Select Location</option>
			<option value="Shri Vaishnav Institute Of Technology & Science (SVITS,Indore) [Date Awaited]" id="drb1" style="<?php if($wid != 6){echo "display:none;";} ?>">Shri Vaishnav Institute Of Technology & Science (SVITS,Indore) [8th-9th Mar'13]</option>
			<option value="Sagar Institute of Research & Technology (SIRT,Bhopal) [22nd-23rd Feb'13]" id="drb2" style="<?php if($wid != 6){echo "display:none;";} ?>" disabled="disabled">Sagar Institute of Research & Technology (SIRT,Bhopal) [DONE]</option>
			<option value="Patel College of Science & Technology (PCST,Indore) [11th-12th Mar'13]" id="drb3" style="<?php if($wid != 6){echo "display:none;";} ?>">Patel College of Science & Technology (PCST,Indore) [11th-12th Mar'13]</option>
			<option value="Barkatullah University Institute of Technology [Date Awaited]" id="drb4" style="<?php if($wid != 6){echo "display:none;";} ?>">Barkatullah University Institute of Technology [13th-14th Mar'13]</option>
			<option value="Indira Gandhi Engineering College (IGEC,Sagar) [Date Awaited]" id="drb5" style="<?php if($wid != 6){echo "display:none;";} ?>">Indira Gandhi Engineering College (IGEC,Sagar) [Date Awaited]</option>
			<option value="Rewa Engineering College, Rewa [5th-6th Mar'13]" id="drb6" style="<?php if($wid != 6){echo "display:none;";} ?>">Rewa Engineering College, Rewa [5th-6th Mar'13]</option>
			
			<option value="University Institute of Technology, Bhopal (UIT-RGPV,Bhopal) [1st-2nd Mar'13]" id="dirn1" style="<?php if($wid != 5){echo "display:none;";} ?>">University Institute of Technology, Bhopal (UIT-RGPV,Bhopal) [1st-2nd Mar'13]</option>
			<option value="Shri Govindram Seksaria Institute of Technology and Science, Indore (SGSITS,Indore) [9th-10th Mar'13]" id="dirn2" style="<?php if($wid != 5){echo "display:none;";} ?>">Shri Govindram Seksaria Institute of Technology and Science, Indore (SGSITS,Indore) [2nd-3rd Mar'13]</option>
			<option value="Pioneer Institute, Sagar [Date Awaited]" id="dirn3" style="<?php if($wid != 5){echo "display:none;";} ?>">Pioneer Institute, Sagar [Date Awaited]</option>
			</select>
			
			</td>
		</tr>
		<tr>
		<td>Team Members</td><td style="width:20px;"></td>
		<td>
		<select name="no_p">
		<option value="1" selected="selected">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		</select>
		</td>
		</tr>
		<!-- There are two options for payment. One is on the spot and the other is dd. If dd is selected then only  -->
		<tr>
			<td>Mode of Payment</td><td style="width:20px;"></td>
			<td>			
			<input type="radio" name="payment" onclick="showbar(<?php echo "1, ".$wid; ?>), cod('1')" checked="checked" value="DD"/>DD&nbsp;
			<input type="radio" name="payment" onclick="showbar(<?php echo "2, ".$wid; ?>), cod('0')" value="CASH"/>CASH
			
			</td>
		</tr>
		<tr >
			<td>DD Number</td><td style="width:20px;"></td>
			<td><input onblur="ddcheck('<?php echo 'dd'.$wid; ?>')" id="<?php echo 'dd'.$wid; ?>" name="dno" type="text"></td>
		</tr>
		<tr>
			<td></td><td style="width:20px;"></td>
			<td><input name="Submit1" type="submit" value="submit" /></td>
		</tr>
	</table>
	
</form>