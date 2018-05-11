<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
	private $currencies = [];
	private $max_price = 0;
	
    public function addCurrency(Currency $currency): void
    {
        $this->currencies = $currency;
		$max_price = $currency->getDailyPrice()
        $this->max_price = $max_price > $this->max_price ? $max_price : $this->max_price;
    }

    public function maxPrice(): float
    {
		return $max_price;
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}