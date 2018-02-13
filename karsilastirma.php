<?php
/*
== eşittir
!= eşit değildir
> büyüktür
< küçüktür
>= büyük eşittir
<= küçük eşittir

*/

$sayi1 = 15;
$sayi2 = 19;

echo $sayi1==$sayi2; //false yanlıştır
echo '<br/>';
echo $sayi1!=$sayi2; // true 1
echo '<br/>';
echo $sayi1>$sayi2; //false yanlıştır
echo '<br/>';
echo $sayi1<$sayi2; //true 1
/*
if ingilizcede eğer demek
*/
if($sayi1==$sayi2)
{
	echo '<br/>Eşit değil';
}
?>