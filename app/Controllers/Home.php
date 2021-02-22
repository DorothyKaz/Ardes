<?php

namespace App\Controllers;
use App\Models\ExchangeratedataModel as Exchange;

class Home extends BaseController
{
	private $_data = [];
	
	public function index()
	{
		$exchange = new Exchange();
		$this->_data['exchange'] = $exchange->getLatestData();
		$this->_data['currencies'] = $exchange->getCurrencies();

		$this->ionAuth = new \IonAuth\Libraries\IonAuth();
		
		if(!$this->ionAuth->loggedIn()){
			
			return view('welcome_message', $this->_data);
		} 
		$this->_data['user'] = $this->ionAuth->user()->row();
		helper(['url', 'html']);
		return view('dashboard', $this->_data);
	}
}
