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



$error = "";
if (isset($_POST['btnVolgende'])) 
{
    $paginaNr++;
    if ($res['Wachtwoord']==1){
        try{
            include_once("classes/Ouder.class.php");
            $ouder = new Ouder();
            $ouder -> Email = $_SESSION["Email"];
            $ouder -> Wachtwoord = $_POST['wachtwoord'];   

        if ($ouder -> BevestigLogin() == 1){
            header('Location: pagina.php?paginaNr='.$paginaNr);
        }else{
            throw new Exception("uw wachtwoord of Email is fout");   
        }
        }catch (Exception $e){
            $error = $e->getMessage();   
        }
    }else{
       
    header('Location: pagina.php?paginaNr='.$paginaNr);
    }
        
        
}


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
    <!--end hamburger menu-->
 
    
    
<div class="site-wrap" id="jungle"> 
     

    <form action="" method="post">

<?php
$buttonText = "Nieuwe opdracht";
if ($res['PaginaNummer']==0){
    $buttonText = "Start opdracht";
    
}

if ($res['Prijs']==1){
    echo "<img src=".$res['PrijsImg']." alt=".$res['Omschrijving']." class='foto'/>";
}

if ($res['Wachtwoord']==1){
    echo "<input class='wachtwoord' type='password' name='wachtwoord' placeholder='Wachtwoord mama of papa'/>";
    $buttonText = "Voltooi Opdracht";
}


if ($res['Omschrijving'] != null){
   echo "<h1 class='titel'>" . $res['Titel']. "</h1>";
   echo "<p class='omschrijving'>" . $res['Omschrijving']. "</p>";
    }


if ($res['Score']==1){
    echo "<ul>";
    for ($i = 1; $i <= $totaalscore; $i++){
    echo "<li class='bananen'><img class='banaan' src='".$res['ScoreVolImg']."' alt='ScoreVol' class='ScoreVol'/></li>";        
    }
    for ($i = 1; $i <= 10-$totaalscore; $i++){
    echo "<li class='bananen'><img class='banaan' src='".$res['ScoreLeegImg']."' alt='ScoreLeeg' class='ScoreLeeg'/></li>";        
    }
    echo "</ul>";      
    $_SESSION['score']=$totaalscore + 0.5;
    
}
    
if ($res['Mascotte'] != null){
   echo "<img src=". $res['Mascotte']." 'alt='aap' class='aap'/>";
    }


?>
    
    <input type="submit" id="start" name="btnVolgende" value="<?php echo $buttonText?>"/>
    </form>
    
  

</div>     
    
    
 
	

	
</body>
</html>