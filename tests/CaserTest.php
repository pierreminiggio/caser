<?php

namespace PierreMiniggio\CaserTest;

use PHPUnit\Framework\TestCase;
use PierreMiniggio\Caser\Caser;

class CaserTest extends TestCase
{

    public function testCaser()
    {
        $caser = new Caser();
        $testCases = [
            ['testAa', 'test_aa'],
            ['testAaBb', 'test_aa_bb'],
            ['testAaBbCc', 'test_aa_bb_cc']
        ];

        foreach ($testCases as $testCase) {
            $this->assertSame($testCase[1], $caser->camelCaseToSnakeCase($testCase[0]));
        }

    }
}
