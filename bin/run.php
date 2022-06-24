<?php
namespace Dojo;
require_once(__DIR__.'/../src/FizzBuzz.php');
$unfizzbuzz= new FizzBuzz();
$resultat=$unfizzbuzz->resultat(1,15);
print $resultat;
