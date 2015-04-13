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

		<h1>EEN ACCOUNT AANMAKEN</h1>
		<h2>Hier maak je een ouder-account aan voor "Da's Kinderspel". Dit account gebruik je om deze applicatie te beheren. Nadien kan je kind-accounts aanmaken om jouw kinderen de app te laten gebruiken.</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="formblok">
				<label for="username">Kies een unieke gebruikersnaam en paswoord voor jouw ouder-account</label>
				<input type="text" name="username" placeholder="gebruikersnaam"required="required" />
				<input type="password" id="password1" name="password1" placeholder="wachtwoord"/>
				<input type="password" id="password2" name="password2" placeholder="wachtwoord herhalen"/>
			
			</div>
			<div class="formblok">
				<label for="username">Vul hier je eigen naam in.</label>
				<input type="text" name="surname" placeholder="voornaam"required="required" />
				<input type="text" name="name" placeholder="achternaam"required="required" />
			</div>
			<div class="formblok">
				<label for="username">Vul hier jouw e-mailadres in, hierop krijg je later de gegevens van jouw account.</label>
				<input type="email" id="email" name="email" placeholder="Email"/>
			</div>
			<div class="formblok">
				<label for="username">Jouw geboortedatum</label>	
				<input type="date" name="date" placeholder="Geboortedatum" required="required"/>
			</div>
			<div class="formblok">
				</div>

		<div class="feedback">
			<?php
		
		if(!empty($feedback))
		{
			 echo $feedback; 
		} ?>
		</div>

	<input type="submit" name="btnSignup" value="Jouw account aanmaken" />
	<a href="login.php" class="subbtn">Heb je al een account? Klik dan hier om in te loggen.</a> 
		
		</form>
		
	</section>



	</section>
	
</body>
</html>