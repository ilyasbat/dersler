<?php

$sayi = 150;

switch($sayi)
{
	case 15:
		echo 'Sayı 15tir';
	break;

	case 32:
		echo 'Sayı 32tir';
	break;

	case 159:
		echo 'Sayı 159dur';
	break;
	case 150:
		echo 'Sayı 150dir';
	break;
	default:
		echo 'Sayının ne olduğu belli değil.';
	break;
}
echo '<br/>';
switch($sayi)
{
	case $sayi<15:
		echo 'Sayı 15ten küçüktür';
	break;
	case 150:
		echo 'Sayı 150dir';
	break;
	case $sayi>32:
		echo 'Sayı 32den büyüktür';
	break;

	default:
		echo 'Sayının ne olduğu belli değil.';
	break;
}
	
/*
linkten bir değer aldım onu $l değişkenine atadım
*/
echo '<br/>';
$l = 'not';
switch($l)
{
	case 'k';	
		echo 'Ben bir kategoriyim';
	break;
	case 'yorum';	
		echo 'Ben bir yorum sayfasıyım';
	break;
	case 'not';	
		echo 'Ben bir not sayfasıyım';
	break;

	default:
		echo 'Ben bir test sayfasıyım';
	break;
}

?>