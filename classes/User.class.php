<?php 
	include_once("classes/db.class.php");
	
	class User
	{
		private $m_sVoornaam;
		private $m_sName;
		private $m_sEmail;
		private $m_sDate;
		private $m_sPassword;

		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty)
			{
				case "Username": $this->m_sVoornaam = $p_vValue;
				break;

				case "Surname": $this->m_sVoornaam = $p_vValue;
				break;

				case "Name": $this->m_sName = $p_vValue;
				break;
				
				case "Email": $this->m_sEmail = $p_vValue;
				break;

				case "Date": $this->m_sDate = $p_vValue;
				break;
				
				case "Password": 
				//check of paswoord minstens 5 karakters is
				if(strlen($p_vValue) < 5)
				{
					throw new Exception("Password not long enough.");
				}
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
			$sSql = "insert into tblusers (voornaam, naam, email, geboortedatum, password)
					values(
							'".$db->conn->real_escape_string($this->m_sVoornaam)."', 
							'".$db->conn->real_escape_string($this->m_sName)."', 
							'".$db->conn->real_escape_string($this->m_sEmail)."',
							'".$db->conn->real_escape_string($this->m_sDate)."',
							'".$db->conn->real_escape_string($this->m_sPassword)."'
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
				header('Location: tafels.php');
			} 
			else 
			{
				throw new Exception("User and/or password are not correct");
				
			}
		}


		
	}

?>

