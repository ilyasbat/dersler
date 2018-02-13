<html>
	<head>
		<title>Form işleme</title>
	</head>
	<body>
		<?php
		
			
			if($_POST)
			{

				if($_POST['ad'])
				{
					$bloro = $_POST['ad'];
				}
				else
				{
					$bloro = '';
				}
				if($_POST['soyad'])
				{
					$gloro = $_POST['soyad'];
				}
				else
				{
					$gloro = '';
				}
				if($_POST['id'])
				{
					$id = $_POST['id'];
				}
				else
				{
					$id = '';
				}
				echo $bloro.' '.$gloro.' '.$id;
			}
			/*if($_GET)
			{
				if($_GET['ad'])
				{
					$bloro = $_GET['ad'];
				}
				else
				{
					$bloro = '';
				}
				if($_GET['soyad'])
				{
					$gloro = $_GET['soyad'];
				}
				else
				{
					$gloro = '';
				}
				echo $bloro.' '.$gloro;
			}*/

			/*if($_REQUEST)
			{
				$b = '';
				$c = '';
				if($_REQUEST['ad'])
				{
					$b = $_REQUEST['ad'];
				}
				if($_REQUEST['soyad'])
				{
					$c = $_REQUEST['soyad'];
				}
				echo $b.' '.$c;	
			}*/
			


		?>
		<h2>Get Metodu</h2>
		<form action="http://localhost/form-isle.php" method="get">
			<input type="text" name="ad">
			<input type="text" name="soyad">
			<button type="submit">Gönder</button>
		</form>

		<h2>Post Metodu</h2>
		<form action="http://localhost/form-isle.php" method="post">
			<input type="text" name="ad">
			<input type="text" name="soyad">
			<input type="hidden" name="id" value="15"/>
			<button type="submit">Gönder</button>
		</form>
	</body>
</html>