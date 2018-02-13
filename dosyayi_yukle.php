<?php
	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';
	$max_size = 10000000;
	if($_FILES['dosya']['size']<$max_size)
	{
		echo $_FILES['dosya']['name'];
		$bol = explode('.',$_FILES['dosya']['name']);
		print_r($bol);
		$uzanti = end($bol);
		if(move_uploaded_file($_FILES['dosya']['tmp_name'], 'uploads/'.$_POST['isim'].'.'.$uzanti))
		{
			header('location: http://localhost/dosya_yukleme.php?yukleme=ok');
		}
	}
	else
	{
		header('location: http://localhost/dosya_yukleme.php?yukleme=big');	
	}
?>