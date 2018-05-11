<?php

namespace Cryptocurrency\Task1;

class Bitcoin implements Currency
{
	private $name;
	private $price;
	private $logo_url;
	
	public function __construct($price = 0)
	{
		$this->price = $price;
		$this->name = 'Bitcoin';
		$this->logo_url = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
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