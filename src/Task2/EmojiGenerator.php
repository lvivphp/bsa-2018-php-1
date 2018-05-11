<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        $emoji = ['🚀', '🚃', '🚄', '🚅', '🚇'];
		for ($i = 0; $i < count($emoji); $i++) {
			yield $emoji[$i];
		}
    }
}