<?php 
require_once 'AppendData.php';
class LoadFile
{
    
    private $filepath;
    
    // constructor
    public function __construct()
    {	
	 define('PROJECT_ROOT', dirname(dirname(__FILE__)));
    
	 $this->filepath= PROJECT_ROOT.'/regulator/data.json';
    }
    
    function get_content(){
		
		$array = file_get_contents($this->filepath);
		return $json_a = json_decode($array, true); 
		}
    
    
   
     
} //end Class


?>
