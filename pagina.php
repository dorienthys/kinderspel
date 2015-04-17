<?php 
include_once("classes/Pagina.class.php");
$pagina = new Pagina();

session_start();

$paginaNr = $_GET["paginaNr"];

if ($_SESSION['score'] == null){
$_SESSION['score']=1;   
}
if ($paginaNr==0){
 $_SESSION['score']=1;   
}

$totaalscore = $_SESSION['score'];


$result = $pagina->getpagina($paginaNr,1);
$res = $result->fetch_assoc();


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
 
<div class="site-wrap"> 

<?php
if ($res['PaginaNummer']==0){
    echo $res['Omschrijving'];
}

if ($res['Prijs']==1){
    echo "<img src=".$res['PrijsImg']." alt=".$res['Omschrijving']." class='foto'/>";
}

if ($res['Wachtwoord']==1){
    echo "<input type='password' name='wachtwoord' placeholder='Wachtwoord mama of papa'/>";
    
}

if ($res['Score']==1){

    echo "<ul>";
    for ($i = 1; $i <= $totaalscore; $i++){
    echo "<li><img src='".$res['ScoreVolImg']."' alt='ScoreVol' class='ScoreVol'/></li>";        
    }
    for ($i = 1; $i <= 10-$totaalscore; $i++){
    echo "<li><img src='".$res['ScoreLeegImg']."' alt='ScoreLeeg' class='ScoreLeeg'/></li>";        
    }
    echo "</ul>";
    $totaalscore++;
    $_SESSION['score']=$totaalscore;
}

if ($res['Omschrijving'] != null){
    echo $res['Omschrijving'];
}
    
?>

    <a href="pagina.php?paginaNr=<?php $paginaNr++; echo $paginaNr?>">Next</a></div>     
    
    
 
	

	
</body>
</html>