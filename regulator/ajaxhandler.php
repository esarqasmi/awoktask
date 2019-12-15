<?php  
//ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
 error_reporting(0); //Becuase if uncertainity of Scrapper
require_once '../classes/Init.php';

if(isset( $_POST['keyword'] )) {
     $obj = new Init();
     $result = $obj->getProducts($_POST['keyword']);
     print_r(json_encode($result));
}
//just for clearing json data
if(isset( $_POST['clear'] )) {
	//open file to write
	$fp = fopen("data.json", "r+");
	// clear content to 0 bits
	ftruncate($fp, 0);
		//close file
	$cleared = fclose($fp);
		if($cleared !=FALSE){
		echo true;
		}
}
 ?>