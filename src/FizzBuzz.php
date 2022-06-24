<?php
namespace Dojo;

class FizzBuzz
{
    const NOMBRE_FIZZ=3;
    const NOMBRE_BUZZ=5;
    const SEPARATEUR=' ';
    const FIZZ='Fizz';
    const BUZZ='Buzz';
    const FIZZBUZZ='FizzBuzz';
   public function Transformer($nb):string
   {
        $resultat='';
        if($nb%3==0 && $nb%5==0)
        {
            $resultat.='FizzBuzz';
        }
        elseif($nb%3==0)
        {
            $resultat.='Fizz';
        }
        elseif($nb%5==0)
        {
            $resultat.='Buzz';
        }
        else
        {
            $resultat.=$nb;
        }
        return $resultat;
   }

   public function resultat(int $valeurDepart, int $valeurMax):string
   {
        $resultat='';
        for($valeurDepart; $valeurDepart<=$valeurMax; $valeurDepart++)
        {
            if($valeurDepart%self::NOMBRE_FIZZ==0 && $valeurDepart%self::NOMBRE_BUZZ==0)
            {
                $resultat.=self::FIZZBUZZ.self::SEPARATEUR;
            }
            elseif($valeurDepart%self::NOMBRE_FIZZ==0)
            {
                $resultat.=self::FIZZ.self::SEPARATEUR; 
            }
            elseif($valeurDepart%self::NOMBRE_BUZZ==0)
            {
                $resultat.=self::BUZZ.self::SEPARATEUR;
            }
            else
            {
                $resultat.=$valeurDepart.self::SEPARATEUR;
            }
        }
        $resultat=trim($resultat);
        return $resultat;
   }
}
