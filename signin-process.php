<?php 
   	include('connect-mysql.php');

	if(!isset($_POST['inputPseudo']) || !isset($_POST['inputPassword']) ) 
	{
		die('Please fill all required fields');
	}

	// trim all data before process sql to compare
	$pseudo =  trim($_POST['inputPseudo']);
	$password =  trim($_POST['inputPassword']);

	// check string to be encoded to avoid "SQL-injection attack"

	// retrieve the user info to compare it
	if(openUserSession($pseudo, $password)){

		//die ("Successful log") ;
		echo "Successful log using echo" ;


				
	}
	else
	{
		die("Error connection");
	}
	

	// Get the Confirmation for success creation by getting the affected row.
 
 // 5. Close sql connection.
 //mysqli_close($dbcon);
?>