<?php

require_once 'AppendData.php';
class Init
{
    
    private $keyword;
    
    // constructor
    public function __construct()
    {
        //$filename = 'data.json';
    }
    
    
    
    
    /* Create Connection */
    public function connection($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 10.10; labnol;) ctrlq.org");
        curl_setopt($curl, CURLOPT_ENCODING, 'identity');
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $html = curl_exec($curl);
        curl_close($curl);
        
        return $html; //reurn html scraped code
    }
    
    
    // get name property
    public function getProducts($keyword)
    {
        
        
        $amazon_data   = $this->amazon($keyword);
        $fsnapdeal_data = $this->snapdeal($keyword);
        $merged = array_merge($amazon_data, $fsnapdeal_data); 
        $appendData =new AppendData();
         $results = $appendData->appendData($merged); 
		return $merged;
        
    }
    /* To Get data from amazon  */
    function amazon($search)
    {
        $url = "http://www.amazon.ae/s/?url=search-alias%3Daps&field-keywords=$search";  
        $query = array(
            'name' => "//h2[contains(@class, 'a-size-mini a-spacing-none a-color-base s-line-clamp-')]",
            'image_url' => "//img[contains(@class, 's-image')]/@src",
            'price' => "//span[contains(@class, 'a-offscreen')] "
            // 'href' => "//a[contains(@class, 'a-link-normal a-text-normal')]/@href",
        );
        $data  = $this->scrapper($url, $query);
        $sorted_data = $this->sorting($data);
        return $sorted_data;
        
        
        
    }
	
    /* To Get data from snapdeal */
    function snapdeal($search)
    {
        
         $search = str_replace(" ", "%20", $search);
        
        $url = "https://www.snapdeal.com/search?keyword=$search";
        
        $query       = array(
            'name' => "//p[contains(@class, 'product-title')]",
          //  'image_url' => "//input[contains(@class, 'compareImg')]/@value",
            'image_url' => "//source[contains(@class, 'product-image')]/@srcset", 
            'price' => "//span[contains(@class, 'lfloat product-price')] "
            //  'href' => "//a[contains(@class, 'dp-widget-link hashAdded')]/@href", 
        );
        $data        = $this->scrapper($url, $query);
        $sorted_data = $this->sorting($data);
        return $sorted_data;
    }
    /* Scrap data from sites */
    function scrapper($url, $query)
    {
        
        $html = $this->connection($url);
        $dom  = new DomDocument();
        libxml_use_internal_errors();
        @$dom->loadHTML($html);
        $xpath = new DomXPath($dom);
        foreach ($query as $key => $q) {
            $nodes = $xpath->query($q);
			
            foreach ($nodes as $key2 => $node) { 
				if(!empty($node->textContent)){
                $data[$key2][$key] = trim(preg_replace('/\s\s+/', ' ', $node->textContent));
            }
			}
            
        }
		
		//$data =array_shift($data);
 
        return $data;
        
    }
    
    /* Sorting according to Price Asecending*/
    function sorting($data)
    {
        $res = array();
        foreach ($data as $key => $row) {
            $res[$key] = $row['price'];
        }
        array_multisort($res, SORT_ASC, $data);
        
        return $data;
    }
     
} //end Class


?>
