<?php

	$testsearch = $_POST['Search'];

	//This handles the login authentication
	//set up variables for database connection
			
		$username = "root";
		$password = "";
		$server = "localhost";
		$database = "helpdesk";
			
		//connect to database server
		$con = mysqli_connect($server,$username,$password,$database) or die("error: could not connect");
		
		$jobsearch = mysqli_query( $con,"SELECT * FROM jobs WHERE JobID = ".$testsearch) or die("error with query");
		
	echo $testsearch;
	echo $jobsearch;
		
		mysqli_close($con); 
?>