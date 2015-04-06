<?php 
		session_start();
		if(isset($_SESSION['login']))
		{
			header('Location: challenge.php');
		}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Kinderspel startpagina</title>
	<meta name="description" content="Kinderspel app">
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
		<img src="images/icon_account.png" alt="account icoon" class="icoon"/>

        <div class="banner">
        <h1>INLOGGEN</h1>
    
        </div> 

		<!--<img src="images/mascotte_index.png" alt="kinderspelmascotte" class="indeximg"/>-->

		<a href="login.php"/><button class="indexbtn" id="indexbtn1">Inloggen</button> </a>
		<a href="register.php"/><button class="indexbtn" id="indexbtn2">Een account aanmaken</button> </a>
	
</body>
</html>