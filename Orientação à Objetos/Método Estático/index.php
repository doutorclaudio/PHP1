<?php
class Matematica{

    public static string $nome = 'Bonieky';
    
    public static function somar($x, $y){
        return $x + $y;
    }

}

echo Matematica::$nome;
//echo Matematica::somar(20,30);