<?php
class WineLibrary {
	function getAll() {
		$mongohq_url = "https://api.mongohq.com/databases/wine/collections/australian/documents?_apikey=9guoo8ndq9hj5y1ur1w1";
		$tuCurl = curl_init(); 
		curl_setopt($tuCurl, CURLOPT_URL, $mongohq_url); 
		curl_setopt($tuCurl, CURLOPT_PORT , 443); 
		curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1); 
		$tuData = curl_exec($tuCurl); 
		curl_close($tuCurl); 
		return $tuData;
	}
}
?>