<?php

if (isset($_POST['submitted'])) {
	
	include('connect-mysql.php');

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$pseudo = $_POST['pseudo'];
	$emailAddress = $_POST['emailAddress'];
	$password = $_POST['password'];
    $birthday = $_POST['birthday']

	$sqlinsert = "INSERT INTO signup (firstName, lastName, pseudo, emailAddress, password, birthday) 
    VALUE ('$firstName', '$lastName', '$pseudo', '$emailAddress', '$password', '$birthday')" ;

	if(!mysql_query($dbcon, $sqlinsert)){
		die('error inserting new record');
	}

	$newrecord = "record added to the database";

}


?>


<html lang="en">

    <head>
        <meta charset="utf-8"></meta>
        <meta content="" name="description"></meta>
        <meta content="" name="author"></meta>
        <title>Inscription</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"></link>
        <link rel="stylesheet" type="text/css" href="signin.css">
    </head>
    <body>


        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                <span class="sr-only">

                    Toggle navigation

                </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">

                Musika

            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">

                        Home

                    </a>
                </li>
                <li>
                    <a href="connexion.html">

                        Upload

                    </a>
                </li>
                <li>
                    <a href="#contact">

                        Music

                    </a>
                </li>

                <form class="navbar-form navbar-right" role="form">

                <div class="form-group">
                <input class="form-control" type="text" placeholder="Search"></input>
                </div>
                <button class="btn btn-success" type="submit">

                Go

                </button>

                </form>

                <li>
                    <a href="connexion.html">

                        Sign In

                    </a>
                </li>
            </ul>
        </div>
        <!--

        /.nav-collapse 

        -->
    </div>

</nav>





        <div class="container">
            <form class="form-signin" role="form" action="" method="post">
                <h2 class="form-signin-heading">

                    Sign Up

                </h2>

                <a href="connexion.html"> Have an account? Sign in now! </a>

                <label class="sr-only" for="inputFirstName">First Name</label>
                <input id="inputFirstName" class="form-control" type="Fname" autofocus="" required="" placeholder="First Name"></input>

                <label class="sr-only" for="inputLastName">Last Name</label>
                <input id="inputLastName" class="form-control" type="Lname" autofocus="" required="" placeholder="Last Name"></input>

                <label class="sr-only" for="inputPseudo">Pseudo</label>
                <input id="inputPseudo" class="form-control" type="pseudo" autofocus="" required="" placeholder="Pseudo"></input>


                 <label class="sr-only" for="inputEmailAddress">Email address</label>
                <input id="inputEmailAddress" class="form-control" type="emailAddress" autofocus="" required="" placeholder="Email address"></input>

                <label class="sr-only" for="inputPassword">Password</label>
                <input id="inputPassword" class="form-control" type="password" required="" placeholder="Password"></input>

                <label class="sr-only" for="inputBirthday">Birthday</label>
                <input id="inputBirthday" class="form-control" type="birthday" autofocus="" required="" placeholder="birthday"></input>


                 <!-- <label class="sr-only" for="inputPassword">

                    mm/dd/yy

                </label>
                <input id="inputPassword" class="form-control" type="birthday" required="" placeholder="Birthday"></input> -->

                <button class="btn btn-lg btn-primary btn-block" type="submit">

                    Submit

                </button>
            </form>
        </div>
        
    </body>

</html>