<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://livraria.schoolofnet/admin_categorias.php?edit=1");
curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=417a9050b7aa08a53f36ef39d8b9b50c');
curl_exec($ch);
?>