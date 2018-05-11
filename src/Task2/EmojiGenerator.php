<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public $emoji;
	
	public function __construct()
	{
		$this->emoji = ['🚀', '🚃', '🚄', '🚅', '🚇'];
	}
	
	public function generate(): \Generator
    {
		for ($i = 0; $i < count($this->emoji); $i++) {
			yield $this->emoji[$i];
		}
    }
}