<?php 
include ('conn2.html');
	//connect to database

		$db = mysqli_connect('localhost','root','','map');

		if ($db->connect_error)
		{
		    die('"Connection failed: "' . $db->connect_error);
		} 
		else {
		echo '"connection ok"';
		}
 
		//if save button is clicked
			
		if(isset($_POST['locate'])){
		$latitude=$_POST['lat'];
		$longitude=$_POST['long'];
		$zoom=$_POST['zoom'];
	    //get variable all form variables
	    $location = "https://www.google.com/maps/place/MMF+Systems+(India)+Pvt.+Ltd./@".$latitude.",".$longitude.",".$zoom."z/data=!4m12!1m6!3m5!1s0x0:0x1c2e35caf2b1e50!2sMMF+Systems+(India)+Pvt.+Ltd.!8m2!3d18.5587549!4d73.7752235!3m4!1s0x0:0x1c2e35caf2b1e50!8m2!3d18.5587549!4d73.7752235";

	header('$location');
	$quary="INSERT INTO register(latitude,longitude,zoom) VALUES('$latitude','$longitude','$zoom')";
    //$insert=mysqli_query($conn,"INSERT INTO register(latitude,longitude,zoom) VALUES('$latitude','$longitude','$zoom')");
    if($quary)
    {
    	echo "correct location";
    }
    else{
    	echo "incorrect location";
    }
}
?>

