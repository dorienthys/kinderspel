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
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/mediaqueries.css"/>

</head>
<body>
    
  
    

		

        <div id="container">
            <img src="images/icon_account.png" alt="account icoon" class="bol"/>
        <h1>Voeg een nieuwe speler toe.</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <div class="formblok">
            <label for="surname">NAAM</label>
			<input type="text" name="surname" placeholder="voornaam"required="required" />
            <input type="text" name="name" placeholder="achternaam"required="required" />
            </div>

            <div class="formblok">
            <label for="username">USERNAME & WACHTWOORD</label>
            <input type="text" name="username" id="username" placeholder="username"required="required" />
            <input type="password" name="password" placeholder="wachtwoord"required="required" />
            </div>
            
            <div class="formblok">
            <label for="date">GEBOORTEDATUM</label>
			<input type="date" name="date" id="date" placeholder="Geboortedatum" required="required"/>
            </div>

            <div class="formblok">
            <!--<label class="spelerlbl" for="V">MEISJE</label>-->
            <label for="geslacht">GESLACHT</label>
            <input type="radio" id="geslacht" name="geslacht" value="vrouw" id="V" checked>MEISJE</input>
            <!--<label class="spelerlbl" for="M">JONGEN</label>-->
            <input type="radio" name="geslacht" value="man" id="M">JONGEN</input>
            </div>

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

          <input type="submit" name="btnSignup" value="SPELER TOEVOEGEN"/>
	    </form>
            
            
            

      




        </div>


</body>
</html>