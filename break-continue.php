<?php

/*
	continue olduğu yerde o döngüyü bir kereliğine es geçer.
*/

for($i=0;$i<10;$i++)
{
	if($i%2!=0)
	{
		continue;	
	}
	echo $i.'<br/>';

}
echo 'İLK FOR BİTTİ<br/><br/><br/>';
/*
eğer döngünün koşula gelmeden tamamen durmasını istiyorsak break komutunu kullanacağız.
*/

for($t=150;$t<1500;$t++)
{
	if($t==300)
	{
		break;
	}
	echo $t.'<br/>';
}
echo 'İKİNCİ FOR BİTTİ<br/><br/><br/>';
?>