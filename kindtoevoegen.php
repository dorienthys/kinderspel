<?php 
include_once("classes/Kind.class.php");



if (isset($_POST['btnSignup'])) 
{

try
{
    $kind = new Kind();
    $kind -> OuderID = 1;
    $kind -> Naam = $_POST['Naam'];
    $kind -> Voornaam = $_POST['Voornaam'];
    $kind -> Geboortedatum = $_POST['Geboortedatum'];
    $kind -> Geslacht = $_POST['Geslacht'];
    $kind -> Afbeelding = 'images/jungle.png';
    $kind -> KindToevoegen();
    header('Location: kind.php');
        
}catch (Exception $e){
    
 $feedback = $e->getMessage();   
    
}
}
/*		session_start();
		if(isset($_SESSION['login']))
		{
			header('Location: challenge.php');
		}*/
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
        <h1>Voeg een nieuwe speler toe.</h1>
            
                <div id="mainform">
            <label for="formdiv">FOTO UPLOADEN</label>
                <div id="formdiv">
        <form action="" enctype="multipart/form-data" id="form" method="post" name="form">
                    <div id="upload">
                    <input id="file" name="file" type="file">
                    </div>
                </form>              
                </div>
        </div>
    

        <form action="" method="post">
            
            <div class="formblok">
            <label for="surname">NAAM</label>
			<input type="text" name="Voornaam" placeholder="voornaam"required="required" />
            <input type="text" name="Naam" placeholder="achternaam"required="required" />
            </div>

                    
            <div class="formblok">
            <label for="date">GEBOORTEDATUM</label>
			<input type="date" name="Geboortedatum" id="date" placeholder="Geboortedatum" required="required"/>
            </div>

            <div class="formblok">
            <!--<label class="spelerlbl" for="V">MEISJE</label>-->
            <label for="geslacht">GESLACHT</label>
            <input type="radio" id="geslacht" name="Geslacht" value="vrouw" id="V" checked>MEISJE</input>
            <!--<label class="spelerlbl" for="M">JONGEN</label>-->
            <input type="radio" name="Geslacht" value="man" id="M">JONGEN</input>
            </div>

    <?php
		if(!empty($feedback))
		{
			 echo $feedback; 
		} ?>

          <input type="submit" name="btnSignup" value="SPELER TOEVOEGEN"/>
	    </form>
            
            
            

      




        </div>


</body>
</html>