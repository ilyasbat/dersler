<?php

$string = 'ilyasbat';
$sifre = 12345;
$md5sifre = md5($sifre);
echo $string;

echo '<br/>';
echo md5($string);

echo '<br/>';
echo $md5sifre;