<?php
/*
You are given two strings - pattern and source. The first string pattern contains only the symbols 0 and 1, and the second string source contains only lowercase English letters.

Let's say that pattern matches a substring source[l..r] of source if the following three conditions are met:

(x)they have equal length,
for each 0 in pattern the corresponding letter in the substring is a vowel,
for each 1 in pattern the corresponding letter is a consonant.
Your task is to calculate the number of substrings of source that match pattern.

Note: In this task we define the vowels as 'a', 'e', 'i', 'o', 'u', and 'y'. All other letters are consonants.*/
function compare($pattern, $source){
    if(strlen($pattern)==strlen($source)){
        //Las cadenas tienen la misma longitud
        $vowels = array("a","e","i","o","u","y");
        $cons = array("b","c","d","f","g","h","i","j","k","l","m","n","p","q","r","s","t","u","v","w","x","z");
        $source = str_replace($vowels,0,$source);
        $source = str_replace($cons,1,$source);
        $posicion = 3;
        $contador = 0;
        $tl = 0;
        for ($i=0;$i<(strlen($pattern)-1);$i++){
            $path = '010';
            $ns = substr($pattern,$i,$posicion);
                if($ns==$path){
                    $tl = $tl +1;
                }
            
        }    
        return $tl;
    } else {
        echo "no tienen la misma longitud";
    }
}

$cadena1="1010100100110100101101101101001000101101101011010010101011010010011";
$cadena2="maracaiboeslaciudadmasbellaquehayenelcontinentetienelagochinaypuente";

echo compare($cadena1, $cadena2);

