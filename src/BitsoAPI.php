<?php

namespace ElMictlan\BitsoPlugin;

class BitsoAPI{

	private $ch;
	private $message;
	private $url = 'https://api.bitso.com/v3/';

	public function __construct(){
		$this->message = 'hello 2';
		 
	}
	
	public function getMessage(){

		return $this->message;

	}

	public function getAvailableBooks(){
		return $this->publicRestAPI('available_books');
	}

	public function getTicker(String $book = null){
		if($book != null)
			$result = $this->publicRestAPI('ticker', array('book' => $book));
		else
			$result = $this->publicRestAPI('ticker');
		return $result;
	}

	private function publicRestAPI(String $path, Array $params = null){
		/*if($params != null)
			$url = $this->url . '/' . $path . '?book=' . $params['book'];
		else
			$url = $this->url . '/' . $path . '/';*/
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_URL, $url);
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "GET");
		$result = curl_exec($this->ch);
		return $result;
	}

}