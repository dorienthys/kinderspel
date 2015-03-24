<?php 
include_once("classes/User.class.php");
if (isset($_POST['btnSignup'])) 
{
	/*if ($_POST['password1'] = $_POST['password2']) 
	{*/
	
		try
		{
		$user = new User();
		$user -> Password = $_POST['password1'];
		$user -> Username = $_POST['username'];
		$user -> Surname = $_POST['surname'];
		$user -> Name = $_POST['name'];
		$user -> Email = $_POST['email'];
		$user -> Date = $_POST['date'];
		$user -> Register();
		}
	
		catch (Exception $e)
		{
			$feedback=$e->getMessage();
		}
	/*}*/
	
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Kinderspel app">
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<section id="container">
		<img src="images/icon_register.png" alt="account icon" class="bol"/>
		<a href="login.php">Heb je al een account? Klik dan hier om in te loggen.</a> 

		<h1>EEN ACCOUNT AANMAKEN</h1>

		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" name="username" placeholder="gebruikersnaam"required="required" />
			<input type="text" name="surname" placeholder="voornaam"required="required" />
			<input type="text" name="name" placeholder="achternaam"required="required" />

			<input type="email" id="email" name="email" placeholder="Email"/>
			<input type="date" name="date" placeholder="Geboortedatum" required="required"/>

			<input type="password" id="password1" name="password1" placeholder="wachtwoord"/>
			<input type="password" id="password2" name="password2" placeholder="wachtwoord herhalen"/>

			</div>

		<div class="feedback">
			<?php
		
		if(!empty($feedback)){
			 echo $feedback; 
		}
		 
		 ?></div>


			<input type="submit" name="btnSignup" value="Jouw account aanmaken" />
			
		</form>
		
	</section>



	</section>
	
</body>
</html>