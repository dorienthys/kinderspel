<?php 
include_once("classes/Verhaal.class.php");
$verhaal = new Verhaal();

$result = $verhaal->getlijst(6);



?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Challenge kiezen</title>
	<meta name="description" content="Kinderspel app">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/mediaqueries.css"/>
</head>
<body>

    
    <!--hamburger menu-->
  <ul class="navigation">
    <img src="images/icon_account.png" alt="profiel" class="profiel"/>
    <li class="nav-item"><a href="index.php">MIJN OPDRACHTEN</a></li>
    <li class="nav-item"><a href="mijnverhalen.php">MIJN VERHALEN</a></li>
    <li class="nav-item"><a href="help.php">HELP</a></li>
</ul>
    
 
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
    
    <!--end menu-->
 
<div class="site-wrap" id="challenge"> 

    <img src="images/star.png" alt="icoon star" class="storyicoon"/>
    <h1 class="story">KIES EEN VERHAAL</h1>  

<?php
$i = 1;
    while ($lijst = $result->fetch_assoc())
    {
        ?>
        <div class="verhalen">
            <div class="lijstverhalen" id="verhaal<?php echo $i ?>">
                <img src="<?php echo $lijst['startimg']?>" alt="<?php echo $lijst['omschrijving']?>" class="foto"/>
                <a href="pagina.php?paginaNr=0"><h1><?php echo $lijst['omschrijving']?></h1></a>
                <button type="button" class="freebtn" id="btn1" disabled>GRATIS</button>
            </div>
        </div>

<?php $i++; } ?>
    
    
    
    <!--    

        <div class="verhalen">
            <div id="verhaal1">
                <img src="images/junlge.png" alt="jungle" class="foto"/>
                <h1>JEFKE DE AAP IN DE JUNGLE</h1>
                <button type="button" class="freebtn" id="btn1" disabled>GRATIS</button>
            </div>
        </div>
    
    <div class="verhalen">
            <div id="verhaal2">
                <img src="images/junlge.png" alt="jungle" class="foto"/>
                <h1>KITO HET VARKEN OP DE BOERDERIJ</h1>
                <button type="button" class="freebtn" id="btn2">F</button>
            </div>
    </div>
    
    
    <div class="verhalen">
            <div id="verhaal3">
                <img src="images/junlge.png" alt="jungle" class="foto"/>
                <h1>BILLIE IN DE RUIMTE</h1>
                <button type="button" class="freebtn" id="btn3">€ 0.99</button>
            </div>
    </div>
    
    
    <div class="verhalen">
            <div id="verhaal4">
                <img src="images/junlge.png" alt="jungle" class="foto"/>
                <h1>STEVEN DE STIER IS SPANJE</h1>
                <button type="button" class="freebtn" id="btn3">€ 0.99</button>
            </div>
    </div>

    -->
    
</div>     
    
    
 
	

	
</body>
</html>