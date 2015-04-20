<?php 
	include_once("classes/db.class.php");
	
	class Ouder
	{
		private $m_sVoornaam;
		private $m_sNaam;
		private $m_sEmail;
		private $m_sGeboortedatum;
		private $m_sWachtwoord;
		private $m_sPlaats;
        private $m_sAdres;
		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty)
			{
				case "Voornaam": $this->m_sVoornaam = $p_vValue;
				break;

				case "Naam": $this->m_sNaam = $p_vValue;
				break;
				
				case "Email": $this->m_sEmail = $p_vValue;
				//check of email al bestaat
				/*if()
				{
					throw new Exception("Er bestaat al een account met dit mailadres.");
				}*/
				break;
                
                 case 'Plaats':
                $this->m_sPlaats = $p_vValue;
				break;
			    
                case 'Adres':
				$this->m_sAdres = $p_vValue;
				break;

				case "Geboortedatum": $this->m_sGeboortedatum = $p_vValue;
				/*check of leeftijd > 
				if(strtotime(now()) - strtotime($p_vValue) < 18)
				{
					throw new Exception("Kinderen mogen geen account aanmaken, vraag aan je ouders om een account aan te maken voor u?");
				}*/
				break;
				
				case "Wachtwoord": 
				//check of paswoord minstens 5 karakters is
				if(strlen($p_vValue) < 5)
				{
					throw new Exception("Dit wachtwoord is niet lang genoeg.");
				}
				$salt = "ergzg85fhfhf0ea6g5654";
				$this->m_sWachtwoord = md5($p_vValue.$salt);
				break;

				
				
			}
		}


		public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case "Voornaam": return $this->m_sVoornaam;
				break;

				case "Naam": return $this->m_sNaam;
				break;
				
				case "Email": return $this->m_sEmail;
				break;

				case "Geboortedatum": return $this->m_sGeboortedatum;
				break;
                
                
                case "Adres": return $this->m_sAdres;
				break;
                
                case "Plaats": return $this->m_sPlaats;
				break;
				
				case "Wachtwoord": return $this->m_sWachtwoord;
				break;

			}
        }


		public function Register()
		{

	// save Ouder to database
				$db = new Database();
				$sql = "insert into tblOuders (Naam, Voornaam, Wachtwoord, Geboortedatum, Plaats, Adres, Email)
					values( 
							'".$db->conn->real_escape_string($this->m_sNaam)."',
							'".$db->conn->real_escape_string($this->m_sVoornaam)."',
							'".$db->conn->real_escape_string($this->m_sWachtwoord)."',
							'".$db->conn->real_escape_string($this->m_sGeboortedatum)."',
							'".$db->conn->real_escape_string($this->m_sPlaats)."',
							'".$db->conn->real_escape_string($this->m_sAdres)."',
                            '".$db->conn->real_escape_string($this->m_sEmail)."'        
					      )";
			$db->conn->query($sql);
			header('Location: index.php');
				

			
		}

		public function BevestigLogin()
		{
			session_start();
			$db = new Database();
			$sql = "SELECT * FROM tblouders WHERE Email ='".$this->m_sEmail."' AND Wachtwoord = '".$this->m_sWachtwoord."';";			
			$check = $db->conn->query($sql); 

            return mysqli_num_rows($check);
            /*
			if(mysqli_num_rows($check) == 1)
			{
				
} 
			else 
			{
				throw new Exception("Email and/or Wachtwoord are not correct");
				
			}*/
		}		
	}


?>

