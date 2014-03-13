<?php 

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

	$con=mysqli_connect("localhost","root","","epics");

	$json=array();

	if (mysqli_connect_errno())
	  {
		  $data= "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	
		$query="SELECT username,password FROM regtable where username='".$_GET['username']."' and password='".$_GET['password']."'";
		//echo $query."\n";
		
		$result = mysqli_query($con,$query);
				
		if (!mysqli_query($con,$query))
  		{
  			$data ='Error: ' . mysqli_error($con);
  			$status=-1;
  		}	
		else if (mysqli_num_rows($result) == 1) {
			$data="Welcome ".$_GET['username'];
			$status=1;
		}
		else{
			$data="Authentication Failed";
			$status=0;
		}

	  mysqli_close($con);
	  
	  //echo $data;

	$json[0]=$data;
	$json[1]=$status;

/*you have to mention this callback compulsory*/

echo $_GET['jsoncallback'] . '(' . json_encode($json) . ');';
 
?>
