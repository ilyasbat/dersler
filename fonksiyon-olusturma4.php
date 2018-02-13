<?php
declare(strict_types = 1);
/*
int
float
bool
string
interfaces
array
callable
*/

function topla($sayi1,$sayi2) : int
{
	return $sayi1+$sayi2;
}

//echo topla(1,5);
//6.7 = float


function cinsiyet($deger):bool
{
	if($deger=='erkek' || $deger=='kiz')
	{
		return true;
	}
	else
	{
		return false;
	}	

}

if(cinsiyet('bloro'))
{
	//işlemler devam etsin
}

?>