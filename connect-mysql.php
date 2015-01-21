<?php 

define("DB_USER", "root");
define("DB_PSWD", "");
define("DB_HOST", "localhost:81");
define("DB_NAME", "musikadb");

/* 1 .connect to mysql */
global $dbcon;
$dbcon = mysqli_connect("localhost", "root", "", "musikadb");

if(!$dbcon){ die('No database connection'); } 

// 2. connect to database
//if(!mysqli_select_db("musikadb")) { die('No select Database'); }

// 3. Execute Query
function createUser($firstname, $lastName,  $pseudo,  $emailAddress, $password, $birthday){
	global $dbcon;
	
	$qry =  "INSERT INTO users (firstName, lastName, pseudo, emailAddress, password, birthday)  
			VALUE ('{$firstname}', '{$lastName}', '{$pseudo}', '{$emailAddress}', '{$password}', '{$birthday}')" ;

 	//$result = mysqli_query($link, $query);
	if(!mysqli_query($dbcon, $qry)){
		die("no execute query");
	}
} 


// before comfirm user to signin, compare infos
// 3. Execute Query
function openUserSession($pseudo,  $password){
	global $dbcon;
	
	// $pseudoInDB and $passwordInDB   need to be fetch from db to compare it
	//$qry =  "SELECT pseudo, password FROM users  WHERE pseudo LIKE '".$pseudo."' AND password LIKE '". $password ."'";
	
	$qry =  "SELECT pseudo, password FROM users  WHERE pseudo LIKE '{$pseudo}' AND password LIKE '{$password}'";
 	
 	$result=mysqli_query($dbcon,$qry);

 	if($result){
 		$array_result = mysqli_fetch_array($result);
 		return true;
 	}

 	return false;
} 
 
// 4. Get Result 

?>