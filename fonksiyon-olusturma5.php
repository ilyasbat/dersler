<?php
//closure fonksiyonlar
/*
$topla = function($sayi1,$sayi2)
{
	echo $sayi1+$sayi2;
};

$topla(1,6);

echo '<br/>';
$sayi = 15;
$carp = function($carpi) use($sayi)
{
	return $sayi*$carpi;
};
echo $carp(5);

*/

$dizi = array('bu bir link','bu haber','sok sok sok','iste o goruntuler');
/*$dizi = array_map(function($deger){
	return str_replace(' ', '-', $deger);
}, $dizi);
*/
$degis = function($deger)
{
	return str_replace(' ', '-', $deger);	
};
$dizi = array_map($degis,$dizi);
print_r($dizi);

/*
Normalde Nasıl OLURDU?
*/
/*
function bosluk_to_tire($deger)
{
	return str_replace(' ', '-', $deger);
}

$dizi = array('bu bir link','bu haber','sok sok sok','iste o goruntuler');
$dizi = array_map('bosluk_to_tire',$dizi);
print_r($dizi);*/
?>