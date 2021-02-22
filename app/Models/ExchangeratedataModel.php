<?php

namespace App\Models;

use CodeIgniter\Model;
use EvdB\OpenExchangeRates\OpenExchangeRates;
use GuzzleHttp\Client;

class ExchangeratedataModel
{
	// protected $DBGroup              = 'default';
	// protected $table                = 'exchangeratedatas';
	// protected $primaryKey           = 'id';
	// protected $useAutoIncrement     = true;
	// protected $insertID             = 0;
	// protected $returnType           = 'array';
	// protected $useSoftDelete        = false;
	// protected $protectFields        = true;
	// protected $allowedFields        = [];

	// // Dates
	// protected $useTimestamps        = false;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';

	// // Validation
	// protected $validationRules      = [];
	// protected $validationMessages   = [];
	// protected $skipValidation       = false;
	// protected $cleanValidationRules = true;

	// // Callbacks
	// protected $allowCallbacks       = true;
	// protected $beforeInsert         = [];
	// protected $afterInsert          = [];
	// protected $beforeUpdate         = [];
	// protected $afterUpdate          = [];
	// protected $beforeFind           = [];
	// protected $afterFind            = [];
	// protected $beforeDelete         = [];
	// protected $afterDelete          = [];

	private $_key = '2a1dce6178624d989c6acf03458b7c6d';
	private $_exchange;

	public function __construct(){

		//construct request client
		$client = new Client(['base_url' => OpenExchangeRates::getBaseUrl(true)]);

		//construct openexchangerates instance
		$this->_exchange = new OpenExchangeRates(['app_id' => $this->_key], $client);
	}

	public function getLatestData(){
		return json_decode($this->_exchange->latest()->getContents());
	}

	public function getCurrencies(){
		return json_decode($this->_exchange->currencies()->getContents());
	}

	public function convert($value, $from, $to){
		return $this->_exchange->convert($value, $from, $to);
	}

}
