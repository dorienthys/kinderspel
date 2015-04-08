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
	<title>Challenge starten</title>
	<meta name="description" content="Kinderspel app">
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    
  <ul class="navigation">
    <img src="images/icon_account.png" alt="profiel" class="profiel"/>
    <li class="nav-item"><a href="index.php">MIJN OPDRACHTEN</a></li>
    <li class="nav-item"><a href="mijnverhalen.php">MIJN VERHALEN</a></li>
    <li class="nav-item"><a href="help.php">HOE WERKT DE APP</a></li>
</ul>
 
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
 
<div class="site-wrap"> 

    <img src="images/star.png" alt="icoon star" class="storyicoon"/>
    <h1 class="story">KIES EEN VERHAAL</h1>  
    
        <div class="verhalen">
            <div id="verhaal1">
                <img src="images/junlge.png" alt="jungle" class="jungle"/>
                <h1>JEFKE DE AAP IN DE JUNGLE</h1>
                <img src="images/gratis.png" alt="gratis verhaal" class="gratis"/>
            </div>
    
        </div>

       
</div>     
    
    
 
	

	
</body>
</html>