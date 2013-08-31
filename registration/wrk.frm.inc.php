<style>
	td {
		text-align:right;
		text-decoration:bold;
		font-size:20px;
		color:#FFFFFF;
		text-shadow:3px 3px 3px #000;
		}
</style>

<form method="post" action="?input" id="" onsubmit="return ddcheck('<?php echo 'dd'.$wid; ?>')">
	<input name="wid" type="hidden" value ="<?php echo $wid ;?>">
	<table>
		<tr>
			<td>Date</td><td style="width:20px;"></td>
			<td>
			
			<select name="date">
			<?php foreach($datea as $date) {echo "<option>".$date."<//option>";} ?>
			</select>
			
			</td>
		</tr>
		<tr>
			<td>City</td><td style="width:20px;"></td>
			<td>
			
			<select name="city">
			<?php foreach($citya as $city) {echo "<option>".$city."</option>";} ?>
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
