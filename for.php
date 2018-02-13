<?php

for($i=1;$i<10;$i++)
{

	echo 'MErhaba ben '.$i.'. FOR :)(: <br/>' ;
	//1
	//2
}
echo '<br/><br/><br/>';
/*1 den yüze kadar olan sayıları toplayalım*/
$toplam = 0;
for($s=1;$s<100;$s++)
{
	$toplam += $s;
	//echo 'Toplam: '.$toplam.'<br/>';
}
echo '1den yüze kadar olan sayıların toplamı: '.$toplam.'<br/>';

/*1den 50ye kadar olan sayıların karesinin toplamı nedir?*/
$toplam2 = 0;
for($i=1;$i<50;$i++)
{
	$toplam2 += $i*$i;
}
echo '1den 50ye kadar olan sayılarının karesinin toplamı: '.$toplam2.'<br/>';

for($ab=100;$ab>1;$ab--)
{
	echo 'ab: '.$ab.'<br/>';
}
echo 'THE END';
?>