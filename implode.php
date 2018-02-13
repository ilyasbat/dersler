<?php

$array = array('Bir değişken', 'iki değişken', 'bu da bir değişken', 'inanmayacaksınız ama bu da bir değişken');

/*$degisken = '';
foreach($array as $a)
{
	$degisken .= $a.',';
}
echo trim($degisken,',');
KLASİK YÖNTEM
*/

$string = implode('<br/>', $array);
echo $string;
?>