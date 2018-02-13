<?php

$dizi1 = array('ad'=>'ilyas','soyad'=>'bat','Öğretmen','Lise','yas'=>29);
$dizi2 = array('Iğdır','Erzurum','Gölcük','İzmir');

echo 'DİZİ 1 ';
echo '<pre>';
print_r($dizi1);
echo '</pre>';

echo 'DİZİ 2 ';
echo '<pre>';
print_r($dizi2);
echo '</pre>';

$yeni_dizi = array_merge($dizi1,$dizi2);
echo 'EKLENMİŞ DİZİ $yeni_dizi ';
echo '<pre>';
print_r($yeni_dizi);
echo '</pre>';
?>