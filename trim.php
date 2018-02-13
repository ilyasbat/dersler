<?php

$metin = '    	 merhaba dünya    ';
echo $metin.'-'.strlen($metin);
echo '
';
$trimlimetin = trim($metin);
echo $trimlimetin.'-'.strlen($trimlimetin);
echo '<br/>';
$noktalidegisken = '... Bla bla . . . bla bla .';
echo $noktalidegisken.'<br/>';
echo str_replace('.','',$noktalidegisken); // Tüm noktaları temizler
echo '<br/>';
echo trim($noktalidegisken,'.'); // 
?>