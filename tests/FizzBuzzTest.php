<?php
namespace Dojo\Tests;

use Dojo\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testTransformerNombreCaractere():void
    {
        $unfizzbuzz= new FizzBuzz();
        $reponse=$unfizzbuzz->Transformer(1);
        $this->assertSame('1',$reponse);
    }

    public function testTransformerNombreEnBuzz():void
    {
        $unfizzbuzz= new FizzBuzz();
        $reponse=$unfizzbuzz->Transformer(5);
        $this->assertSame('Buzz',$reponse);
    }

    public function testTransformerNombreEnFizz():void
    {
        $unfizzbuzz= new FizzBuzz();
        $reponse=$unfizzbuzz->Transformer(3);
        $this->assertSame('Fizz',$reponse);
    }

    public function testTransformerNombreEnFizzBuzz():void
    {
        $unfizzbuzz= new FizzBuzz();
        $reponse=$unfizzbuzz->Transformer(15);
        $this->assertSame('FizzBuzz',$reponse);
    }

    public function testResultat():void
    {
        $unfizzbuzz=new FizzBuzz();
        $reponse=$unfizzbuzz->resultat(1,15);
        $this->assertSame('1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz',$reponse);
    }
}

