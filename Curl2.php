<?php
$url='https://www.fotocasa.es/es/alquiler/vivienda/benifaio/aire-acondicionado-calefaccion-parking-jardin-terraza-trastero-zona-comunitaria-piscina-amueblado-television-piscina/152153772/d?RowGrid=3&tti=3&opi=300';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36');
$content = curl_exec($ch);
curl_close($ch);
//$content = '<span><span class="re-DetailHeader-featuresItemValue">5</span> habs.</span>';
//<span class="re-DetailHeader-price">1.000 €<span class="re-DetailHeader-pricePeriodicity"> /mes</span></span>
//<h1 class="re-DetailHeader-propertyTitle">Casa o chalet en Urbanización Pla de Les Clotxes, Benifaió</h1>
preg_match_all('/re-DetailHeader-featuresItemValue">(.*)<\/span> habs./', $content, $matches1);
preg_match_all('/re-DetailHeader-price">(.*)<span class="re-DetailHeader-pricePeriodicity/', $content, $matches2);
preg_match_all('/re-DetailHeader-propertyTitle">(.*)<\/h1>/', $content, $matches3);
echo "<pre>";
var_dump ($matches1);
var_dump ($matches2);
var_dump ($matches3);
?>