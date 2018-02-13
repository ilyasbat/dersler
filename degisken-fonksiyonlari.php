<?php
/*$sayi = 56;
$boolean = true;
$string = 'ahmet';
$float = 1.59;
$meyve = array('elma','armut','kel mahmut');

if(is_int($sayi))
{
	echo '$sayi bir integer değişkendir';	
}
else
{
	echo '$sayi bir integer değişken değildir';	
}
echo '<br/>';
if(is_int($float))
{
	echo '$float bir integer değişkendir';	
}
else
{
	echo '$float bir integer değişken değildir';		
}
echo '<br/>';
if(!is_bool($boolean))
{
	echo '$boolean bir bool değildir';	
}
else
{
	echo '$boolean bir bool değişkendir';		
}
echo '<br/>';
if(is_array($meyve))
{
	echo '<pre>';
	print_r($meyve);	
	echo '</pre>';
}*/

$sayi = '156';
$sayi = intval($sayi);
if(is_int($sayi))
{
	echo $sayi;
}
echo '<br/>';
$float = 1.98;
$float = intval($float);
if(is_int($float))
{
	echo $float;
}
echo '<br/>';

$yas = 'bloro';
$yas = intval($yas);
echo $yas;
echo '<br/>';

$yas2 = '27as';
$yas2 = intval($yas2);
echo $yas2;
?>