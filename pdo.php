<?php
$db = new PDO('mysql:host=localhost;dbname=deneme;charset=utf8','root','');

/*
EKLEME
GÜNCELLEME
SİLME
GÖSTERME

Eğer sorgunun geriye bir şey döndürmesini beklemiyorsanız
exec komutunu kullanın (insert, update ve delete)
Yok bir veri geri gelecekse query kullanılacak (SELECT)
*/
/*
$db->exec("INSERT INTO haber (haber,baslik) VALUES ('Merhaba a dostlar ben geldim naber','Samimi İtiraflar')");
*/
/*EKLEME İŞLEMLERİ*/
/*$ekle = $db->prepare("INSERT INTO haber (haber,baslik) VALUES (?,?)");
$ekle->execute(array('Bu haber ben execute ile ekledim','Napak Yani'));*/
/*
$ekle = $db->prepare("INSERT INTO haber (haber,baslik) VALUES (:haber,:baslik)");
$ekle->execute(array(
	'baslik'=>'İndisli Başlık',
	'haber'=>'Bunu da indis adı vererek ekledik'));*/

/*GÜNCELLEME İŞLEMLERİ*/
/*$db->exec('UPDATE haber SET baslik="güncellenmiş başlık",haber="bunu da exec ile güncelledik" WHERE id=6');

$guncelle = $db->prepare('UPDATE haber SET baslik=?,haber=? WHERE id=?');
$guncelle->execute(array(
	'Execute güncellendi',
	'Bu haberi execute ile güncelledim dostum',
	8));
	*/

	/*SİLME İŞLEMLERİ*/
//$db->exec('DELETE FROM haber WHERE id=7');	
/*$sil = $db->prepare('DELETE FROM haber WHERE id=?');
$sil->execute(array(9));*/

/*$goster = $db->query('SELECT * FROM haber',PDO::FETCH_ASSOC);
if($goster->rowCount())
{
	foreach($goster as $g)
	{
		print_r($g);
	}
}*/

/*SELECT İŞLEMLERİ*/
/*$goster = $db->query('SELECT * FROM haber WHERE id=5')->fetch(PDO::FETCH_ASSOC);
print_r($goster);*/
/*$goster = $db->query('SELECT * FROM haber WHERE id=5 OR id=3');
$goster = $goster->fetch(PDO::FETCH_ASSOC);
print_r($goster);
$goster = $db->query('SELECT * FROM haber WHERE id=3 OR id=5',PDO::FETCH_ASSOC);
if($goster->rowCount())
{
	foreach($goster as $g)
	{
		print_r($g);
	}
}*/

class Icerik
{
	public function baslikYaz()
	{
		echo $this->baslik.'<br/>';
	}
	public function durumYaz()
	{
		if($this->durum==1)
		{
			echo 'Yayında<br/><br/>';
		}
		else
		{
			echo 'Taslak<br/><br/>';
		}
	}
}
$goster = $db->query('SELECT * FROM haber');
$goster->setFetchMode(PDO::FETCH_CLASS,'Icerik');
foreach($goster as $g)
{
	$g->baslikYaz();
	$g->durumYaz();
	echo $g->haber.'<br/>';
}
$db = null;
?>