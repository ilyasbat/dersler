<?php

/*
	&& = ve
	|| = veya

*/
$sayi1 = 85;
$sayi2 = 19;


if($sayi1>2 && $sayi2<18)
{
	echo 'burası gerçekleşsin';	
}
echo '<br/>';
if($sayi1>2 && $sayi2<20 && $sayi1!=$sayi2)
{
	echo 'burası gerçekleşsin 2';	
}
echo '<br/>';
if($sayi1>508 || $sayi2<15)
{
	echo 'burası gerçekleşsin 3';
}
echo '<br/>';
//                           true || false = true
// (true    &&   true) = true       (false  ||   false) = false
if(($sayi1>20 && $sayi2<25) || ($sayi2<1 || $sayi1>100))
{
	echo 'burası gerçekleşsin 4';
}
?>