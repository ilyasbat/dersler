<?php
echo 'Merhaba Dünya';
function br_yaz()
{
	echo '<br/>';	
}


br_yaz();

function ad_dondur()
{
	return 'İlyas BAT';
}

echo 'Ben Uzaylı!';
br_yaz();
$ad = ad_dondur();


function preli_array($hebele,$karsilama='Merhabalar')
{
	echo '<pre>'.$karsilama.'<br/>';
	print_r($hebele);
	echo '</pre>';
}

$dizi = array('nerhava','okul','saat','bilgisayar','php');

preli_array($dizi,'$dizi değişkeni');

$telefon = array('6s','note 5','s3','general mobile gm7','nokia 3310');

preli_array($telefon);

?>