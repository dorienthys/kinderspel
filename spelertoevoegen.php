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
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
    
  
    

		<img src="images/icon_account.png" alt="account icoon" class="icoon"/>

        <div class="banner">
        <h1>Voeg een nieuwe speler toe.</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="spelerlbl" id="lblnaam">NAAM</label>

			<input type="text" name="username" placeholder="Naam" required="required" />

            <label class="spelerlbl" id="lbldatum">GEBOORTEDATUM</label>

			<input type="date" name="date" placeholder="Geboortedatum" required="required"/>
            
            <label class="spelerlbl" for="V">MEISJE</label>
            <input type="radio" name="geslacht" value="vrouw" id="V" checked>
            <label class="spelerlbl" for="M">JONGEN</label>
            <input type="radio" name="geslacht" value="man" id="M">

          <input type="submit" name="btnSignup" value="SPELER TOEVOEGEN" />
	    </form>
            
            
            
        <div id="mainform">
            <h2>FOTO OPLADEN</h2>
                <div id="formdiv">
                <form action="" enctype="multipart/form-data" id="form" method="post" name="form">
                    <div id="upload">
                    <input id="file" name="file" type="file">
                    </div>
                </form>                    
                </div>
        </div>
        </div>

			
    
    
			
	
    
    
    

		<!--<img src="images/mascotte_index.png" alt="kinderspelmascotte" class="indeximg"/>-->

		
		<!--<a href="register.php"/><button class="indexbtn" id="indexbtn2">Een account aanmaken</button> </a>-->
	
</body>
</html>