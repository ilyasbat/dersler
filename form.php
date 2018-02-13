<html>
<head>
	<title>Formlar</title>
</head>
<body>
	<!-- 
	input
	select
	textarea
	button
	-->
	<form>
		<h3>İnputlar</h3>
		<!-- text, password, checkbox, radio -->
		<div>Text Type: <input type="text" name="ad" value="Bu bir text typedır"/></div>
		<div>Password Type: <input type="password" name="sifre" value="123"/></div>
		<div>Checkbox Type: <input type="checkbox" name="kontrol" checked="checked"/></div>

		<h4>Radiolar</h4>
		<div>Radio Type: type bir: <input type="radio" name="rad" value="kadın"/> 
			type 2<input type="radio" name="rad" value="erkek"></div>

		<h3>Select</h3>
		<select name="yas">
			<option value="">Lütfen seçim yapın</option>
			<?php for($i=1900;$i<=date('Y');$i++){?>
			<option value="<?php echo $i;?>" <?php if($i==1989){?>selected="selected"<?php }?> ><?php echo $i;?> doğumluyum</option>	
			<?php } ?>
		</select>

		<h3>Textarea</h3>
		<textarea name="metin" cols="60" rows="30">merhaba dünya " lşamkdlşas ""</textarea>

		<h3>Buton</h3>
		<div><button type="submit">Gönder</button></div>
	</form>
</body>
</html>