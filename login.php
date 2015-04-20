<?php 

include_once("classes/Ouder.class.php");

$error = "";
if (isset($_POST['btnLogin'])) 
{
	try{
    $ouder = new Ouder();
	$ouder -> Email = $_POST['Email'];
	$ouder -> Wachtwoord = $_POST['Wachtwoord'];
    
    if ($ouder -> BevestigLogin() == 1){
        session_start();
        $_SESSION["Email"] = $_POST['Email'];
        header('Location: speler.php');
    }else{
     throw new Exception("uw wachtwoord of Email is fout");   
    }
    }catch (Exception $e){
     $error = $e->getMessage();   
    }
        
        
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
		<p>Heb je al een account? Log je dan hier in met jouw Email en wachtwoord.</p>

		<form action="" method="post">
				<input class="login" type="text" name="Email" placeholder="Email" required="required" />
				<input class="login" type="password" name="Wachtwoord" placeholder="Wachtwoord" required="required"/>
			
		<input type="submit" name="btnLogin" value="Inloggen" />
		</form>

		<a href="register.php" class="subbtn">Nog geen account? Klik dan hier.</a> 

        <label id="error"><?php echo $error ?></label>

	</section>
	
</body>
</html>