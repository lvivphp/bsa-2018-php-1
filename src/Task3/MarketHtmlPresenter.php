<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {	
		$out = '<ul>';
		foreach ($market->getCurrencies() as $currency) {
			$out .= '<li>';
			$out .= '<img src="'.$currency->getLogoUrl().'">';
			$out .= $currency->getName() . ': ' . $currency->getDailyPrice();
			$out .= '</li>';
		}
		$out .= '</ul>';
		return $out;
    }
}