<?php
/*

if eğer anlamına gelir.

*/

/*if(3>2)
{
	echo 'bu kod çalışacak';	
}
echo '<br/>';
if(3<2)
{
	echo 'bu kod çalışacak 2<br/>';
}
else
{
	echo 'else kodu çalışsın<br/>';	
}*/

$isim = 'Ahmet';
$yemek = 'Makarna';
$isim2 = 'İlyas';
$yemek2 = 'Pilav';
$isim3 = 'Mehmet';
$yemek3 = 'Tavuk döner';


if($isim=='Ahmet')
{
	echo 'Bu isim Ahmettir<br/>';
}


if($isim2=='Mehmet')
{
	echo 'İsim2 Mehmettir<br/>';
}
elseif($isim2=='Burçak')
{
	echo 'İsim2 Burçaktır';
}
elseif($isim2=='Nurgül')
{
	echo 'İsim2 Nurgül';
}
else
{
	echo 'İsim2 mehmet, burçak veya nurgül değil<br/>';
}

/*
$isim = 'Ahmet';
$yemek = 'Makarna';
$isim2 = 'İlyas';
$yemek2 = 'Pilav';
$isim3 = 'Mehmet';
$yemek3 = 'Tavuk döner';
*/

if($yemek2=='Makarna')
{
	echo 'Yemek 2 makarnadır';
}
elseif($yemek2=='et sote')
{
	echo 'Yemek et sotedir';
}
elseif($yemek2=='Pilav')
{
	echo 'Yemek pilavdır';
}
else
{
	echo 'Bu yemeğin ne olduğu belli değildir.';
}
?>