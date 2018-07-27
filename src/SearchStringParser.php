<?php

namespace Wnx\SearchStringParser;

use Spatie\Regex\Regex;

class SearchStringParser
{
    private $pattern = '/(?:[^\s"]+|"[^"]*")+/';

    public function parse(string $stringToParse)
    {
        if (Regex::matchAll($this->pattern, $stringToParse)->hasMatch()) {

            $matches = Regex::matchAll($this->pattern, $stringToParse)->results();
            $filters = [];

            foreach($matches as $match) {
                $block = $match->group(0);

                if (strpos($block, ':') !== false) {
                    list($prefix, $value) = explode(':', $block);
                    $isNegated = (strpos($prefix, '-') === 0);
                } else {
                    $prefix = null;
                    $value = $block;
                    $isNegated = false;
                }

                $filters[] = [
                    'block' => $block,
                    'prefix' => $prefix,
                    'value' => $value,
                    'is_negated' => $isNegated
                ];
            }

        } else {

            // die(var_dump($stringToParse));

        }

        return [
            'string' => $stringToParse,
            'segments' => $filters ?? []
        ];
    }
}
