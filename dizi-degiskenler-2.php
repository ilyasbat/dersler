<?php
$meyveler = array('elma','armut','muz','ananas');

print_r($meyveler);


$arabalar[] = 'opel';
$arabalar[] = 'ford';
$arabalar[] = 'audi';
$arabalar[] = 'mercedes';
echo '<br/>';
print_r($arabalar);

echo '<br/><br/>';

$ogrenci = array('ad'=>'ahmet','numara'=>356,'soyad'=>'demir','not'=>85);

print_r($ogrenci);
echo '<br/>';
echo $ogrenci['ad'];
echo '<br/>';
echo $ogrenci['soyad'];
echo '<br/>';
echo $ogrenci['numara'];
echo '<br/>';
echo $ogrenci['not'];
echo '<br/><br/>';

$kahve['renk'] = 'kahve';
$kahve['tat']  = 'acı';
$kahve['seker']= 'Şekersiz';

print_r($kahve);

echo '<br/><br/>';
/*
Arrayle oluşturulmuş bir diziye şu şekilde de atama yapılabilir.
*/
$ogrenci['babaadi'] = 'Mehmet';
print_r($ogrenci);
?>