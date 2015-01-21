<?php 
   	include('connect-mysql.php');

	if(!isset($_POST['inputFirstName']) || !isset($_POST['inputLastName'])  || !isset($_POST['inputPseudo']) 
		 || !isset($_POST['inputEmailAddress']) || !isset($_POST['inputPassword']) ||!isset($_POST['inputConfirmPassword']) 
		 || isset($_POST['inputBirthday'])) 
	{
		die('Please fill all required fields');
	}


	if( $_POST['inputPassword'] != $_POST['inputConfirmPassword'])
	{
		die('Password don\'t match ');
	}


	// trim all data before process sql save
	$firstname = trim($_POST['inputFirstName']);
	$lastname =  trim($_POST['inputLastName']);
	$pseudo =  trim($_POST['inputPseudo']);
	$password =  trim($_POST['inputPassword']);
	$email =  trim($_POST['inputEmailAddress']);
	$birthday =  trim($_POST['inputBirthday']);

	// check string to be encoded to avoid "SQL-injection attack"

	// create new user instance OOP

	// Save the new user
	createUser($firstname, $lastname, $password, $pseudo, $email, $birthday);

	echo "Successful creation" ;
	// Get the Confirmation for success creation by getting the affected row.
 
 // 5. Close sql connection.
 //mysqli_close($dbcon);
?>