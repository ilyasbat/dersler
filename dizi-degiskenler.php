<?php

/*
ilyas kişisiyle ilgili bilgiler
*/
$ad = 'ilyas';
$soyad = 'bat';
$yas = 29;
$yemek = 'makarna';
$sair = 'ahmed arif';

echo $ad.'<br/>'.$soyad.'<br/>'.$yas.'<br/>'.$yemek.'<br/>'.$sair;

echo '<br/><br/><br/>';
/*
DİZİ DEĞİŞKENLER
indis değerleri 0 ile başlar.
*/

$ilyas = array('ilyas','bat',29,'makarna','ahmed arif');
			//	0        1    2     3          4
/*echo $ilyas;
ÇIKTI: Notice: Array to string conversion in G:\local\htdocs\dizi-degiskenler.php on line 22
*/

echo 'Benim adım '.$ilyas[0].' soyadım ise '.$ilyas[1].' yaklaşık olarak
'.$ilyas[2].' yıldır yaşadığımı düşünüyorum. En sevdiğim yemek '.$ilyas[3].' ayrıca sık sık '.$ilyas[4].' okurum.';

$ahmet[] = 'Ahmet';
$ahmet[] = 'Arif';
$ahmet[] = 59;
$ahmet[] = 'pilav';
$ahmet[] = 'Orhan Veli';
echo '<br/><br/><br/>';

echo $ahmet[3];
echo '<br/><br/><br/>';
print_r($ahmet);

?>