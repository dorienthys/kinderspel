<?php
include_once("classes/db.class.php");
class Pagina
{
    private $m_iVerhaalID;
    private $m_iPaginaNummer;
    private $m_bPrijs;
    private $m_bWachtwoord;
    private $m_bScore;
    private $m_sOmschrijving;
    
    
    public function __get($p_sProperty){
        
     switch($p_sProperty){
      
         case 'VerhaalID':
         return $this->m_iVerhaalID;
         break;
         
         case 'PaginaNummer':
         return $this->m_iPaginaNummer;
         break;
         
         case 'Prijs':
         return $this->m_bPrijs;
         break;
         
         case 'Wachtwoord':
         return $this->m_bWachtwoord;
         break;
         
         case 'Score':
         return $this->m_bScore;
         break;
         
         case 'Omschrijving':
         return $this->m_sOmschrijving;
         break;
         
     }
        
    }
    
    public function getpagina($paginaNr, $verhaalid){
    $db = new database();
    $sql = "select * from tblpaginas p, tblafbeeldingen a
where paginanummer = ".$paginaNr."
and p.verhaalid =".$verhaalid."
and p.verhaalid = a.verhaalid";
        return $db->conn->query($sql);
    }
    
    
    
    
    
    
    
}