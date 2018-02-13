<?php
/*
	Foreach dizi değişkenlerle kullanılır.
*/
$ilyas[] = 'Öğretmendir';
$ilyas[] = 'Iğdırlıdır';
$ilyas[] = 'Hızlı gider';
$ilyas[] = 'Dolmuşa biner';
$ilyas[] = 'Kitap okur';

/*echo $ilyas[0].'<br/>';
echo $ilyas[1].'<br/>';
echo $ilyas[2].'<br/>';
echo $ilyas[3].'<br/>';
echo $ilyas[4].'<br/>';*/
foreach($ilyas as $i)
{
	echo '$i = '.$i.'<br/>';
}

echo '<br/><br/><br/>';
$ogrenci['ad'] = 'Ayşe';
$ogrenci['no'] = 256;
$ogrenci['not'] = 86;
$ogrenci['sinif'] = '11/E';

foreach($ogrenci as $deger=>$o)
{
	echo $deger.'='.$o.'<br/>';
}


?>