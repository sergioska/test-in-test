<?php declare(strict_types=1);

namespace TINT;

use PHPUnit\Framework\TestCase;

class FeatureClassTest extends TestCase
{
    public function testSum()
    {
        $feature = new FeatureClass();
        $a = 1;
        $b = 2;
        $this->assertEquals(3, $feature->sum($a, $b));
    }
}