<?php

namespace Wnx\SearchStringParser\Tests;

use Wnx\SearchStringParser\SearchStringParser;
use Wnx\SearchStringParser\Tests\TestCase;

class SearchStringParserTest extends TestCase
{
    public function results($searchString)
    {
        return (new SearchStringParser())->parse($searchString);
    }

    /** @test */
    public function it_parses_a_string_and_returns_an_array()
    {
        $results = $this->results('the string');

        $this->assertTrue(is_array($results));
    }

    /** @test */
    public function explodes_a_search_string_by_space()
    {
        $results = $this->results('is:open -is:issue is:pr stringB');

        $expected = [
            'string' => 'is:open -is:issue is:pr stringB',
            'segments' => [
                [
                    'block' => 'is:open',
                    'prefix' => 'is',
                    'value' => 'open',
                    'is_negated' => false
                ],
                [
                    'block' => '-is:issue',
                    'prefix' => '-is',
                    'value' => 'issue',
                    'is_negated' => true
                ],
                [
                    'block' => 'is:pr',
                    'prefix' => 'is',
                    'value' => 'pr',
                    'is_negated' => false
                ],
                [
                    'block' => 'stringB',
                    'prefix' => null,
                    'value' => 'stringB',
                    'is_negated' => false
                ],
            ]
        ];

        $this->assertEquals($expected, $results);
    }

}
