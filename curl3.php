<?php 
$url='https://www.milanuncios.com/venta-de-pisos-en-talavera-de-la-reina-toledo/zona-hospital-242703417.htm';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36');
$content = curl_exec($ch);
curl_close($ch);
//<div class="pagAnuPrecioTexto">155.000<sup>€</sup></div>
//<div class="dor tag-mobile">3 dorm.</div>
//<h1 class="ad-detail-title">ZONA HOSPITAL - AVD.  JUAN PABLO II</h1>
preg_match_all('/"pagAnuPrecioTexto">(.*)<sup>€/',$content, $matches1);
preg_match_all('/"dor tag-mobile">(.*)<\/div>/',$content, $matches2);
preg_match_all('/"ad-detail-title">(.*)<\/h1>/',$content, $matches3);

echo "<pre>";
var_dump ($matches1);
var_dump($matches2);
var_dump($matches3);

?>