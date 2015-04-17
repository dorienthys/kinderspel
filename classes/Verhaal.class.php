<?php
include_once("classes/db.class.php");
class Verhaal
{
    
    private $m_sOmschrijving;
    private $m_iLeeftijd;
    
    

		public function __set($p_sProperty, $p_vValue)
		{
			switch ($p_sProperty) {
				case 'Omschrijving':
					$this->m_sOmschrijving = $p_vValue;
					break;

				case 'Leeftijd':
					$this->m_sLeeftijd = $p_vValue;
					break;
            }
        }
     
    public function __get($p_sProperty){
    
        switch($p_sProperty){
        
            case 'Omschrijving':
            return $this->m_sOmschrijving;
            break;
            
            case 'Leeftijd':
            return $this->m_iLeeftijd;
            break;
        }
    }
    
    public function getlijst($leeftijd){
     $db = new database();
     $sql = "select v.omschrijving, a.startimg from tblverhalen v, tblafbeeldingen a
where v.verhaalid = a.verhaalid
and ".$leeftijd." between v.leeftijd and v.leeftijd+3";
        return $db->conn->query($sql);
        
        
    }
 
    
}
    
    