<?php
/*
	Toplama = +
	Çıkarma = -
	Bölme = /
	Çarpma = *

	Mod alma = %
	Üs alma = ** (Üs alma PHP 5.6 ve sonraki sürümlerde geçerlidir)

*/

$sayi1 = 17;
$sayi2 = 2;

//Toplama

echo "$sayi1+$sayi2=".($sayi1+$sayi2);
echo '<br/>';

//Çıkarma

echo "$sayi1-$sayi2=".($sayi1-$sayi2);
echo '<br/>';

//Bölme

echo "$sayi1/$sayi2=".($sayi1/$sayi2);
echo '<br/>';

//Çarpma

echo "$sayi1*$sayi2=".($sayi1*$sayi2);
echo '<br/>';

//Mod alma

echo "$sayi1%$sayi2=".($sayi1%$sayi2);
echo '<br/>';

//Üs alma
echo "$sayi1**$sayi2=".($sayi1**$sayi2);
echo '<br/>';



/*
Phpde de matematikteki işlem öncelikleri vardır.
Önce çarpma veya bölme
Ardından toplama veya çıkarma yapılır.
*/

$yenidegisken1 = 16;
$yenidegisken2 = 12;
$yenidegisken3 = 17;
$yenidegisken4 = 3;

/*
öncelikle yenidegisken1 ile yenidegisken3 ü 
çıkarıp yenidegisken2 ve yenidegisken4 ün toplamıyla çarpın.
*/

echo ($yenidegisken1-$yenidegisken3)*($yenidegisken2+$yenidegisken4);
	//              -1               *          15	= -15
?>