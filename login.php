<?php 

include_once("classes/User.class.php");

if (isset($_POST['btnLogin'])) 
{
	$user = new User();
	$user -> Username = $_POST['username'];
	$user -> Password = $_POST['password'];
	$user -> canLogin();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Kinderspel login</title>
	<meta name="description" content="Kinderspel app">
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>

	<section id="container">

		<img src="images/icon_account.png" alt="account icon" class="bol"/>
		
		<h1>AANMELDEN</h1>
		<p>Heb je al een account? Log je dan hier in met jouw gebruikersnaam en wachtwoord.</p>

		<form action="" method="post">
				<input class="login" type="text" name="username" placeholder="gebruikersnaam" required="required" />
				<input class="login" type="password" name="password" placeholder="Paswoord" required="required"/>
			
		<input type="submit" name="btnLogin" value="Inloggen" />
		</form>

		<a href="register.php"class="subbtn">Nog geen account? Klik dan hier.</a> 



	</section>
	
</body>
</html>