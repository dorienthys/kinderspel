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
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css"  media="all" href="css/mediaqueries.css"/>

</head>
<body>
		

        <div class="banner">
        <img src="images/icon_account.png" alt="account icoon" class="icoon"/>
        <h1>INLOGGEN</h1>
        <p>Om te kunnen inloggen moet één van de ouders inloggen met Facebook.</p>
        <a href="speler.php"/><button class="indexbtn" id="indexbtn1">Inloggen met Facebook</button> </a>
        </div> 

		<!--<img src="images/mascotte_index.png" alt="kinderspelmascotte" class="indeximg"/>-->

		
		<!--<a href="register.php"/><button class="indexbtn" id="indexbtn2">Een account aanmaken</button> </a>-->
	
</body>
</html>