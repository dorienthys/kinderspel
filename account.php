<?php 
		/*session_start();
		if(!isset($_SESSION['login']))
		{
			header('Location: index.php');
		}*/
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Kinderspel account</title>
	<meta name="description" content="Kinderspel app">
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/hamburger.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="css/hamburger.css" />
    <link rel="stylesheet" type="text/css"  media="all" href="css/mediaqueries.css"/>
</head>
<body>

	<!--The Hamburger Button in the Header-->
 <header>

        <div id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </header>

    <!--The mobile navigation Markup hidden via css-->
    <nav>
        <img src="images/icon_account.png" alt="navimg" class="nav"/>
        <ul>
           <li><a href="index.php">MIJN OPDRACHTEN</a></li>
            <li><a href="mijnverhalen.php">MIJN VERHALEN</a></li>
           <li><a href="account.php">OUDERPROFIEL</a></li>
           <li><a href="help.html">HELP</a></li>

           <a class="logout" href="logout.php">uitloggen</a>
        </ul>
    </nav>
</header>


	<div class="site-wrap" id="help"> 

    <img src="images/icon_account.png" alt="icoon account" class="storyicoon2"/>
    <h1 class="story">MIJN ACCOUNT</h1>  

		<a href="logout.php"/><button>Afmelden</button></a>


</div>

</body>
</html>