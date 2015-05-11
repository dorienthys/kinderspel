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

 
<div class="site-wrap" id="challenge"> 

    <img src="images/star.png" alt="icoon star" class="storyicoon2"/>
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