<?php 
//include_once("classes/User.class.php");
if (isset($_POST['btnSignup'])) 
{
		try
		{
		$user = new User();
		$user -> Username = $_POST['username'];
		$user -> Surname = $_POST['surname'];
		$user -> Name = $_POST['name'];
		$user -> Password = $_POST['password1'];
		$user -> Password2 = $_POST['password2'];
		$user -> Email = $_POST['email'];
		$user -> Date = $_POST['date'];
		$user -> Checkpass();
		$user -> Register();
		}
	
		catch (Exception $e)
		{
			$feedback=$e->getMessage();
		}
	
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
		<h1>REGISTRATIE</h1>
		<p>Hier maak je een ouder-account aan voor "Da's Kinderspel". Dit account gebruik je om deze applicatie te beheren. Nadien kan je kind-accounts aanmaken om jouw kinderen de app te laten gebruiken.</p>

		<h2>FACEBOOK REGISTRATIE</h2>
		
		<a href="speler.php"/><button class="indexbtn" id="fbbtn">Inloggen met Facebook</button> </a>

		<h2>ZELF EEN ACCOUNT AANMAKEN</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="formblok">
				<label for="username">Kies een unieke gebruikersnaam en paswoord voor jouw ouder-account</label>
				<input type="text" name="username" id="username" placeholder="gebruikersnaam"required="required" />
				<input type="password" id="password1" name="password1" placeholder="wachtwoord"/>
				<input type="password" id="password2" name="password2" placeholder="wachtwoord herhalen"/>
			
			</div>
			<div class="formblok">
				<label for="surname">Vul hier je eigen naam in.</label>
				<input type="text" name="surname" id="surname" placeholder="voornaam"required="required" />
				<input type="text" name="name" id="name" placeholder="achternaam"required="required" />
			</div>
			<div class="formblok">
				<label for="email">Vul hier jouw e-mailadres in, hierop krijg je later de gegevens van jouw account.</label>
				<input type="email" id="email" name="email" placeholder="Email"/>
			</div>
			<div class="formblok">
				<label for="date">Jouw geboortedatum</label>	
				<input type="date" name="date" id="date" placeholder="Geboortedatum" required="required"/>
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