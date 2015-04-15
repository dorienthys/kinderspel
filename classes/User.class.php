<?php 
	include_once("classes/db.class.php");
	
	class User
	{
		private $m_sVoornaam;
		private $m_sName;
		private $m_sEmail;
		private $m_sDate;
		private $m_sPassword;
		private $m_sPassword2;

		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty)
			{
				case "Username": $this->m_sVoornaam = $p_vValue;
				//check of username al bestaat
				/*if()
				{
					throw new Exception("Username reeds in gebruik.");
				}*/
				break;

				case "Surname": $this->m_sVoornaam = $p_vValue;
				break;

				case "Name": $this->m_sName = $p_vValue;
				break;
				
				case "Email": $this->m_sEmail = $p_vValue;
				//check of email al bestaat
				/*if()
				{
					throw new Exception("Er bestaat al een account met dit mailadres.");
				}*/
				break;

				case "Date": $this->m_sDate = $p_vValue;
				//check of leeftijd > 
				if(strtotime($p_vValue) > now())
				{
					throw new Exception("Nog geen 18? Vraag je ouders om een Kinderspel account aan te maken.");
				}
				break;
				
				case "Password": 
				//check of paswoord minstens 5 karakters is
				if(strlen($p_vValue) < 5)
				{
					throw new Exception("Password not long enough.");
				}
				//check of paswoord repeat juist
				/*if($p_vValue != $m_sPassword2)
				{
					throw new Exception("Paswoord niet identiek.");
				}*/



				$salt = "ergzg85fhfhf0ea6g5654";
				$this->m_sPassword = md5($p_vValue.$salt);
				break;

				
				
			}
		}
		public function __get($p_sProperty)
		{
			$vResult = null;
			switch($p_sProperty)
			{
				case "Voornaam": return $this->m_sVoornaam;
				break;

				case "Name": return $this->m_sName;
				break;
				
				case "Email": return $this->m_sEmail;
				break;

				case "Date": return $this->m_sDate;
				break;
				
				case "Password": return $this->m_sPassword;
				break;

			return $vResult;
			}
		}

		public function Register()
		{
			// save user to database
			$db = new Database();
			$sSql = "insert into tblusers (username, paswoord, voornaam, naam, email, geboortedatum)
					values(
							'".$db->conn->real_escape_string($this->m_sUsername)."'
							'".$db->conn->real_escape_string($this->m_sPassword)."'
							'".$db->conn->real_escape_string($this->m_sVoornaam)."', 
							'".$db->conn->real_escape_string($this->m_sName)."', 
							'".$db->conn->real_escape_string($this->m_sEmail)."',
							'".$db->conn->real_escape_string($this->m_sDate)."',
							
					)";
			$rResult = $db->conn->query($sSql);
			header('Location: login.php');
		}

		public function canLogin()
		{
			session_start();
			$db = new Database();
			$sql = "SELECT * FROM tblusers WHERE naam ='" . $this->m_sName . "' AND password = '" . $this->m_sPassword . "';";			
			$check = $db->conn->query($sql);

			if(mysqli_num_rows($check) == 1)
			{
				
			

				// echo "Login geslaagd";
				header('Location: index.php');
			} 
			else 
			{
				throw new Exception("User and/or password are not correct");
				
			}
		}


		
	}

?>

