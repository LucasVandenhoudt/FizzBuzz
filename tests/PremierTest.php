<?php

namespace Dojo\Tests;

use Dojo\PremierCodeDeProduction;
use PHPUnit\Framework\TestCase;

class PremierTest extends TestCase
{
    public function testPremier():void
    {
        $premierCode = new PremierCodeDeProduction();
        $reponse = $premierCode->execute();
        $this->assertSame('Bonjour', $reponse);
    }
}
