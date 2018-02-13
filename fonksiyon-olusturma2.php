<?php

function topla()
{
	$gelen_degerler = func_get_args();
	$bos = 0;
	foreach ($gelen_degerler as $deger) {
		$bos += $deger;
	}
	return $bos;
}

$toplam = topla(1,5,125,10,89,10);
echo $toplam;
echo '<br/>';
function topla_2()
{
	$toplam_deger = func_num_args()-1;
	if(5<=$toplam_deger)
	{
		$gelen_deger = func_get_arg(5);
		return $gelen_deger;
	}

}

$toplam_2 = topla_2(1,5,125,10,89,101);
echo $toplam_2;