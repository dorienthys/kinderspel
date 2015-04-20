<?php 
include_once("classes/Kind.class.php");
$kind = new Kind();

$result = $kind ->getKinderen(1);


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
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/mediaqueries.css"/>

    
</head>
<body>
		

        <div id="container">
        <img src="images/icon_account.png" alt="account icoon" class="bol"/>
            <h1>Wie gaat er spelen?</h1>
        <p>Hier kan je per kind een account aanmaken.</p>
        <a href="kindtoevoegen.php"/><button id="toevoegenbtn">+</button> </a>
     
       
<div class="kinderen">
<?php 
$i=1;
        while ($lijst = $result ->fetch_assoc())
{
?>
    <div class="kind">
            <img src="<?php echo $lijst['Afbeelding']?>" alt="<?php echo $lijst['Voornaam']?>" class="foto"/>
        <label><?php echo $lijst['Voornaam']?></label>
        
        <?php $i++; } ?>
    </div>
 </div>    
    </div> 

		<!--<img src="images/mascotte_index.png" alt="kinderspelmascotte" class="indeximg"/>-->

		
		<!--<a href="register.php"/><button class="indexbtn" id="indexbtn2">Een account aanmaken</button> </a>-->
	
</body>
</html>