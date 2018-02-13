<?php
$eski = 'a';
$yeni = '-';
$metin = 'Merhaba dünya, bu bir değişkendir. Nasılsın?<br/>';
echo 'Orjinal Metin<br/>'.$metin;
$yenimetin =  str_replace($eski,$yeni,$metin,$sayi);
echo 'Yeni Metin<br/>'.$yenimetin.'<br/>';
echo 'Metinde toplam '.$sayi.' değişiklik olmuştur<br/><br/><br/>';

$baslik = 'Gece Düşünmeleri';

$yenibaslik =  strtolower($baslik);
/*$yenibaslik =  str_replace('ş','s',$yenibaslik);
$yenibaslik =  str_replace('ü','u',$yenibaslik);
$yenibaslik =  str_replace(' ','-',$yenibaslik);*/
$degisecek = array('ş','ü',' ','ğ');
$yenidegerler = array('s','u','-','g');
$yenibaslik = str_replace($degisecek,$yenidegerler,$yenibaslik);
echo $yenibaslik;
?>