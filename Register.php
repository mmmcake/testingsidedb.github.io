<!DOCTYPE html>
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
				<form name = "formregister" method = "post" action = "checkreg.php">
					<table class="tableregister">
					<tr>
						<td>Name :- </td><td><input type="text" name="rname" class="registerbox"></td>
					</tr>
					<tr>
						<td>Password :- </td><td><input type="password" name="rpass" class="registerbox"></td>
					</tr>
					</table>
					<input type="submit" value="Login">
				</form>
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