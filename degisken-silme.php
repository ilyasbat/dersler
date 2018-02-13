<?php
/*
değişkenleri unset fonksiyonuyla silebilirsiniz.
*/

$ad = 'Ali';


unset($ad);
#echo $ad;


$arabalar = array('Opel','Ford','Bentley','Ferrari','Chevi');
			//		0		1	     2         3        4
echo 'En sevdiğim araba: '.$arabalar[1];
echo '<br/>';

unset($arabalar[1]);
echo 'Geçen gün bir '.$arabalar[2].' aldım';
echo '<br/>';
print_r($arabalar);
?>