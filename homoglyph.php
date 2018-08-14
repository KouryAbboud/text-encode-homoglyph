<?php

/*

Encoder TEXT To HOMOGLYPH
Support All PHP version
AUTHOR Koury Abboud A.K.A Mr.Pilot
FROM ALCATRAZ 
LICENSE http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License

*/
$text = file_get_contents('text.txt');

$arr_replace =  ["a" => "а","b" => "b","c" => "ϲ","d" => "ⅾ","e" => "е","f" => "f","g" => "ɡ","j" => "ј","k" => "k","m" => "ⅿ","n" => "n","o" => "о","p" => "р","q" => "q","r" => "r","s" => "ѕ","t" => "t","u" => "υ","v" => "ν","w" => "ѡ","x" => "х","y" => "у","z" => "z","B" => "В","D" => "Ꭰ","E" => "Ε","F" => "F","H" => "Н","I" => "Ⅰ","J" => "Ꭻ","K" => "K","M" => "Ⅿ","N" => "Ν","O" => "Օ","P" => "Р","Q" => "Q","R" => "Ꮢ","S" => "Ꮪ","T" => "Т","U" => "⋃","V" => "Ꮩ","W" => "Ꮃ","X" => "Ⅹ","Y" => "Υ","Z" => "Ꮓ","0" => "0","1" => "１","2" => "２","3" => "３","4" => "４","5" => "５","6" => "６","7" => "７","8" => "８","9" => "９"];

$encode  = strtr($text,$arr_replace);

echo "$encode \n";
?>
