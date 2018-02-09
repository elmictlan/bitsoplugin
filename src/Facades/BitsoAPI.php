<?php

namespace ElMictlan\BitsoPlugin\Facades;

use Illuminate\Support\Facades\Facade;

class BitsoAPI extends Facade {
	
	protected static function getFacadeAccessor(){
		return 'BitsoAPI';
	}



}