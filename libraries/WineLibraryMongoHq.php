<?php
require 'libraries/WineLibrary.php';
class WineLibraryMongoHq implements WineLibrary {
    function __construct(CurlAdaptor $curlAdaptor) {
        $this->curlAdaptor = $curlAdaptor;
    }
	function getAll() {
	    $mongohq_url = "https://api.mongohq.com/databases/wine/collections/australian/documents?_apikey=9guoo8ndq9hj5y1ur1w1";
	    return $this->curlAdaptor->sendHttpGet($mongohq_url);
	}
}
?>