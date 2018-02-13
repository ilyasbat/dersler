<?php

$ad = 'İlyas';
define('soyad','bat');
/*
Kural 1 
fonksiyon dışında tanımlanan normal değişkenlerin değeri
fonksiyon içinde kullanılmaz.
Bu kural sabit değişkenler için geçerli DEĞİLDİR

*/
function ad_soyad_yaz()
{
	global $ad;
	$adsoyad = $ad.' '.soyad;
	return $adsoyad;
}

function br_yaz()
{
	echo '<br/>';
}
function bilgi_yaz()
{
	echo ad_soyad_yaz();
	br_yaz();
	echo '28 yaşında';
}

bilgi_yaz();
?>