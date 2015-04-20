<?php
    include_once("classes/db.class.php");

    class Kind
    {
        
        private $m_iOuderID;
        private $m_sVoornaam;
        private $m_sNaam;
        private $m_sGeboortedatum;
        private $m_sAfbeelding;
        private $m_sGeslacht;
        
        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {
                case "OuderID": $this->m_iOuderID = $p_vValue;
                break;
                
                case "Voornaam": $this->m_sVoornaam = $p_vValue;
                break;
                
                case "Naam": $this->m_sNaam = $p_vValue;
                break;
                
                case "Geboortedatum": $this->m_sGeboortedatum = $p_vValue;
                break;
                
                case "Afbeelding": $this->m_sAfbeelding = $p_vValue;
                break;
                
                case "Geslacht": $this->m_sGeslacht = $p_vValue;
                break;
            }
        }
        
        public function __get($p_sProperty)
        {
            switch($p_sProperty)
            {   
                case "OuderID": return $this->m_iOuderID;
                break;
                                
                case "Voornaam": return $this->m_sVoornaam;
                break;
                
                case "Naam": return $this->m_sNaam;
                break;
                
                case "Geboortedatum": return $this->m_sGeboortedatum;
                break;
                
                case "Afbeelding": return $this->m_sAfbeelding;
                break;
                
                case "Geslacht": $this->m_sGeslacht;
                break;
            }
        }
        
        
        public function KindToevoegen()
        {
            $db = new Database();
            $sql = "insert into tblkinderen (OuderID,Naam, Voornaam, Geboortedatum, Afbeelding, Geslacht)
            values(".$db->conn->real_escape_string($this->m_iOuderID).",
                            '".$db->conn->real_escape_string($this->m_sNaam)."',
							'".$db->conn->real_escape_string($this->m_sVoornaam)."',
							".$db->conn->real_escape_string($this->m_sGeboortedatum).",
							'".$db->conn->real_escape_string($this->m_sAfbeelding)."',
                            '".$db->conn->real_escape_string($this->m_sGeslacht)."'
                            )";
            $db->conn->query($sql);
            
        }

        
    public function getKinderen($OuderID){
     $db = new database();
     $sql = "select Afbeelding, Voornaam from tblkinderen
             where ouderID = ".$OuderID;
        return $db->conn->query($sql);
        
    }
    
    
    }




?>