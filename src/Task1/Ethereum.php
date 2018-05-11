<?php

namespace Cryptocurrency\Task1;

class Ethereum implements Currency
{
	private $name;
	private $price;
	private $logo_url;
	
	public function __construct($price)
	{
		$this->price = $price;
		$this->name = 'Ethereum';
		$this->logo_url = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';
	}
	
    public function getName(): string 
	{
		return $this->name;
	}

    public function getDailyPrice(): float
	{
		return $this->price;
	}

    public function getLogoUrl(): string
	{
		return $this->logo_url;
	}
}