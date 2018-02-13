<html>
	<head>
		<title>Dosya Yükleme Paneli</title>
	</head>
	<body>
		<form method="post" action="http://localhost/dosyayi_yukle.php" enctype="multipart/form-data">
			<input type="text" name="isim" placeholder="Dosya ismi">
			<input type="file" name="dosya"/>
			<button type="submit">Submit</button>
		</form>
		<?php if(isset($_GET['yukleme']))
		{
			if($_GET['yukleme']=='ok')
			{
				echo 'Dosya başarıyla yüklendi';
			}
			elseif($_GET['yukleme']=='big')
			{
				echo 'Göndermeye çalıştığınız dosya çok büyük';
			}
			else
			{
				echo 'Bilinmeyen bir hata oluştu.';
			}
		}
		?>
	</body>
</html>