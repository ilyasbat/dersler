<html>
	<head>
		<title>Hesap Makinesi</title>	
		<style>
			input{width: 50px}
			select{width: 60px}
			.hesap{width: 500px;margin:0 auto;border:1px #dd6600 solid;padding:20px;background:#ccc;}
		</style>	
	</head>
	<body>
		<div class="hesap">
			<form method="post" action="">
				Sayı 1: <input type="text" name="sayi1"/>
				<select name="islem">
					<option value="">İşlem</option>
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
				</select>
				Sayı 2: <input type="text" name="sayi2" />	
				<button type="submit">Hesapla</button>	
			</form>	
		
		<?php
			if($_POST)
			{
				
				$sayi1 = intval($_POST['sayi1']);
				$sayi2 = intval($_POST['sayi2']);
				$islem = $_POST['islem'];

				switch($islem) {
					case '+':
						echo topla($sayi1,$sayi2);
					break;
					case '-':
						echo cikar($sayi1,$sayi2);
					break;
					case '*':
						echo carp($sayi1,$sayi2);
					break;
					case '/':
						echo bol($sayi1,$sayi2);
					break;

					default:
						echo 'Lütfen adam gibi işlem seçin';
					break;
				}
			}

			function topla($sayi1,$sayi2)
			{
				return 'Toplamı: '.($sayi1+$sayi2);
			}

			function cikar($sayi1,$sayi2)
			{
				return 'Farkı: '.($sayi1-$sayi2);
			}

			function carp($sayi1,$sayi2)
			{
				return 'Çarpımı: '.($sayi1*$sayi2);
			}

			function bol($sayi1,$sayi2)
			{
				return 'Böümü '.($sayi1/$sayi2);
			}
		?>	
		</div>
	</body>
</html>