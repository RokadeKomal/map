<?php
include ('conn.php');
?>
<!DOCTYPE html>

<html>
<head>
	<title>LOCATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<form method="post" action="conn.php">
		<h1>MAP LOCATION</h1>
			<div class="input">
				<label><b>latitude</b></label>
				<input type="text" name="lat"  placeholder="Enter latitude value" required/>			
			</div>
			<div class="input">
				<label><b>longitude</b></label>
				<input type="text" name="long" placeholder="Enter longitude value" >			
			</div>
			<div class="input">
				<label><b>Zoom</b></label>
				<input type="text" placeholder="zoom" name="zoom">			
			</div>
			<div class="input">
				<input type="submit" name="locate" class="button" value="locate" style="width:94%">
			</div>

		</form>
</body>
</html>
