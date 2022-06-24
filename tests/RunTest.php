<?php
namespace Dojo\Tests;

use Dojo\FizzBuzz;
use PHPUnit\Framework\TestCase;
class RunTest extends TestCase
{
    public function testRun():void
    {
        $expected='1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz';
        
        $unfizzbuzz= new FizzBuzz();
        $resultat=$unfizzbuzz->resultat(1,15);
        
        $this->assertSame($expected,$resultat);
    }
}
