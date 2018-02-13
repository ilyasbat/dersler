<?php

$metin = '<b onmouseover="window.location=\'http://www.google.com.tr\'">Merhaba</b> ben ilyas bat. <br/>
Bu bir denemedir. Kişisel sitem 
<a href="http://www.ilyasbat.com.tr">İlyasbat.com.tr</a>dir. <p>Bu da sana bir paragraf, ve <i>italik yazı</i>, <u>altı çizgili</u></p> <script>window.location="http://www.google.com.tr"</script>
';

echo 'Orjinal Metin<br/>
';
//echo $metin;
echo 'Strip Taglı Metin<br/>
';
echo strip_tags($metin);

echo '<br/>Strip Taglı Metin - Bazılarına izin verilmiş<br/> 
';
echo strip_tags($metin,'<i><b>');
?>