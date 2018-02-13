<?php
/*

	$dizi[ad]['soyad'] = 
*/

$arabalar['opel']['model'][] = 'Astra';
$arabalar['opel']['model'][] = 'Vectra';
$arabalar['opel']['model'][] = 'Insignia';
$arabalar['opel']['model'][] = 'Corsa';
$arabalar['opel']['yil'][] = 1998;
$arabalar['opel']['yil'][] = 2000;
$arabalar['opel']['yil'][] = 2002;
$arabalar['audi']['model'][] = 'A1';
$arabalar['audi']['model'][] = 'A2';
$arabalar['audi']['model'][] = 'A3';
$arabalar['audi']['model'][] = 'A4';
$arabalar['mercedes']['model'][] = 'Gla';
$arabalar['mercedes']['model'][] = 'Cla';
$arabalar['mercedes']['model'][] = 'Vito';

/*
pre kodların düzgün okunmasını sağlayan bir html tagıdır.
*/
echo '<pre>';
print_r($arabalar);
echo '</pre>';
echo '<br/>';
echo $arabalar['opel']['model'][0];

echo '<br/>';
echo $arabalar['audi']['model'][2];
?>