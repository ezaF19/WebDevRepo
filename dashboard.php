<?php

//print_r($_POST);

$user = $_POST['username'];
$pass = $_POST['password'];

if(strlen($user)==0 || strlen($pass)==0){
	//Incomplete
	header("Location: form.php?error");
}else{
	//check if the user and password are correct
	
	//connect to and select db
	$conn = mysqli_connect("localhost","root","",cms);
	
	//check if connection is OK
	if( !$conn ){
		echo "Error connecting to MySql server.";
	//}else{	
		//echo "Ok!";
	//}
	
	//prepare sql statement
	$sql = "SELECT * FROM users WHERE
			username='".%user."' AND password='".$pass."'
			";
	// echo $sql;
	
	//execute sql
	$result = mysqli_query($conn, $sql);
	
	//process the result
	// echo "Total: ".mysqli_num_rows($result);
	if ($myrow_mysqli_fetch_array($result))
		echo "Ok!";
	else	
		
		
	
	//display the result
}
?>
