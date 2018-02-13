<?php
$hayvanlar = 'Kedi Köpek Kuş Sincap';

echo $hayvanlar;

$hayvanlar_dizi = explode(' ',$hayvanlar);
echo '<br/>';
print_r($hayvanlar_dizi);

echo '<br/>';

$dersler = 'edebiyat; matematik; fizik; kimya; biyoloji';
$dersler_dizi = explode(';',$dersler);
echo '<pre>';
print_r($dersler_dizi);
echo '</pre>';
/*foreach($dersler_dizi as $k => $v)
{
	$dersler_dizi[$k] = trim($v);
}*/
//echo ucfirst('benim adım kırmızı');
$dersler_dizi = array_map('trim',$dersler_dizi);
$dersler_dizi = array_map('ucfirst',$dersler_dizi);
echo '<pre>';
print_r($dersler_dizi);
echo '</pre>';
?>