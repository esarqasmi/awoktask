<?php
class AppendData
{
    
    private $filename;
    
    // constructor
    public function __construct()
    {
        $this->filename = 'data.json';
    }
    
     
    
    
    /* To read and write the data  */
    function appendData($data)
    {  
        // read the file if present
        $file = @fopen($this->filename, 'r+');
        
        // create the file if needed
        if ($file === NULL || $file === FALSE) {
            // $file = fopen($filename, 'w+');
            $file = fopen($this->filename, 'w') or die("Can't create file");
            
        }
        
        if ($file) {
            // seek to the end
            fseek($file, 0, SEEK_END);
            
            // are we at the end of is the file empty
            if (ftell($file) > 0) {
                // move back a byte
                fseek($file, -1, SEEK_END);
                
                // add the trailing comma
                fwrite($file, ',', 1);
                 
                // add the new json string
                fwrite($file,  json_encode($data, JSON_UNESCAPED_SLASHES) . ']');
            } else {
                // write the first event inside an array 
                fwrite($file, json_encode(array(
                    $data
                ), JSON_UNESCAPED_SLASHES));
            }
            // close the handle on the file
            fclose($file);
        }
        
        if ($file != NULL) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
} //end Class


?>
