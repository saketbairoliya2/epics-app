<?php 

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

	$con=mysqli_connect("localhost","root","","epics");

	$json=array();

	if (mysqli_connect_errno())
	  {
		  $data= "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	
		$sql="INSERT INTO regtable (fname,lname,email,phone,username,password)
	VALUES
	('$_GET[fname]','$_GET[lname]','$_GET[email]','$_GET[phone]','$_GET[username]','$_GET[password]')";

	if (!mysqli_query($con,$sql))
  	{
  		$data ='Error: ' . mysqli_error($con);
  		$status=-1;
  	}	
	else{
		$data="Welcome ".$_GET['username']." ".$_GET['password'];
		$status=1;
	}
	  mysqli_close($con);

	$json[0]=$data;
	$json[1]=$status;

/*you have to mention this callback compulsory*/

echo $_GET['jsoncallback'] . '(' . json_encode($json) . ');';
 
?>
