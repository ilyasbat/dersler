<?php
$gelenVeri = json_decode(file_get_contents('http://apilayer.net/api/live?access_key=fb252eb3aedcefdd5d23a42476f084cf&format=1&currencies=TRY,EUR,AUD,GBP'));

if($gelenVeri->success)
{
	?>
	<h2>Para Birimi : <?php echo $gelenVeri->source;?></h2>
	<p><?php echo date('d/m/Y H:i:s',$gelenVeri->timestamp);?> Tarihi itibariyle değerleri</p>
	<?php
	foreach ($gelenVeri->quotes AS $key => $value) {
		echo '1 '.$gelenVeri->source.' : '.$value.' '.str_replace($gelenVeri->source,'',$key).'<br/>';	}
}
else
{
	echo 'Hatalı Değer';
}
?>