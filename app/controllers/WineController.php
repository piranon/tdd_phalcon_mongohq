<?php
class WineController {
	function __construct(WineLibrary $wineLibrary){
		$this->wineLibrary = $wineLibrary;
	}
	function getAllWines() {
		$tuData = $this->wineLibrary->getAll();
	  $response = new Phalcon\Http\Response();
		$response->setContentType('application/json');
		$response->setContent($tuData);
		return $response;
	}
}
?>