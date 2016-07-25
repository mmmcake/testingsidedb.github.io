<!DOCTYPE html>
<?php

	session_start();
	$loguser = $_SESSION["loguser"];
	If(!isset($loguser))
	{
		
		header( 'location: HomeG.php' );
	}
	Else
	{
	
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fix 'n' Run</title>
		<link rel="stylesheet" type="text/css" href="Styles/style.css" />
	</head>
	<body>
		<div id="Wrapper">
			<div id="TopBar">
				<div id="login">
					
				</div>
			</div>
			
			<div id="Main">
				<div id="Header">
					<img src="Images/Header.png" alt="some_text" class="Headerimg"/> 
				</div>
				
				<div id="Nav">
					<a href="HomeG.php"><img src="Images/Homebtn.gif" alt="some_text"/></a><a href="AboutusG.php"><img src="Images/AUbtn.gif" alt="some_text"/></a><a href="SupportG.php"><img src="Images/Supportbtn.gif" alt="some_text"/></a><a href="ContactusG.php"><img src="Images/CUbtn.gif" alt="some_text"/></a><a href="Register.php"><img src="Images/Registerbtn.gif" alt="some_text"/></a><img src="Images/ROBar.gif" alt="some_text"/>
				</div>
				
				<div id="Body">
					<?php
			//This handles the login authentication
			//set up variables for database connection
			
			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "helpdesk";
			
			//connect to database server
			$con = mysqli_connect($server,$username,$password,$database) or die("error: could not connect");
			if(!isset($_POST["username"]) && !isset($_POST["password"]))
			{
				echo "Login failed";
			}
			else
			{
				//get the posted values from the previous page
				$user = $_POST["username"];
				$pass = $_POST["password"];
				//query the database for a matching login record
				if($result = mysqli_query($con,"SELECT * FROM users WHERE username = '$user' and password = '$pass'"))
				{
					$rowcount = mysqli_num_rows($result);
						if($rowcount == 1)
						{	
							/*
							echo "<br>";
							echo "<br>";
							echo "<i>Welcome back </i>" . $user;
							echo "<br>";
							echo "<br>";
							echo "<a href=HomeT.php>Continue to home page</a>";
							*/
							header( 'location: HomeT.php' );
						}
						else
						{
							echo "Login failed";
						}
					//count the number of rows that match the query
					// Return the number of rows in result set
				}
				else
				{
					echo "login failed";
				}
				//release the database connection
				mysqli_close($con);
			}
			
					
		?>
				</div>
				
				<div id="Footer">
					<p class="foottext">Copyright &copy; Ainsley Andrews. All rights reserved.<br><?php
					
						//function to detect a user's browser type
						function getBrowser()
						{
							$u_agent = $_SERVER["HTTP_USER_AGENT"];
							$ub = "";
							/*preg_match() is a php function that will look for a match within a string. It will only match once even if it finds multiple matchs in a string.*/
							if (preg_match("/Opera/i",$u_agent))
							{
								$ub = "Your browser is Opera";
							}
							elseif (preg_match("/Firefox/i",$u_agent))
							{
								$ub = "Your browser is Firefox";
							}
							elseif (preg_match("/MSIE/i",$u_agent))
							{
								$ub = "Your browser is Internet Explorer";
							}
							elseif (preg_match("/Chrome/i",$u_agent))
							{
								$ub = "Your browser is Chrome";
							}
							else 
							{
								Echo "Go download a decent browser you fool";
							}
							return $ub;
						}
				
						echo getBrowser();
					?></p>
				</div>
			</div>
		</div>
	</body>
</html>