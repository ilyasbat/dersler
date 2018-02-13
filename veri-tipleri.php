<?php
#integer
/*
	tam sayı veri tipidir.
*/ 

$integer = 5;


//double 
/*
ondalık sayı veri tipidir.
*/

$double = 10.562;

//string 
/*
karakterleri barındıran veri tipidir
UYARI!!: string değişken değerleri tırnaklar içerisine yazılır.
*/

$string = 'Merhaba ben ilyas bat';


//boolean
/*
sadece ve sadece true ya da false değerini tutar.
*/
$boolean = true;


echo 'İnteger değişkeni: '.$integer.' veri tipi: '.gettype($integer);
echo '<br/>';
echo 'Double değişkeni'.$double.' veri tipi: '.gettype($double);
echo '<br/>';
echo 'String değişkeni: '.$string.' veri tipi: '.gettype($string);
echo '<br/>';
echo 'Boolean değişkeni: '.$boolean.' veri tipi: '.gettype($boolean);

echo '<br/>';echo '<br/>';echo '<br/>';

//Bağlama ifadesi

// iki veriyi birbiriyle bağlarken . işaretini kullanırız

$d1 = 'Merhaba ';
$d2 = 'Dünya';

//echo $d1.$d2.' nasılsın?';

$d3 = $d1.$d2.' nerede eski günler?';
echo $d3;
?>