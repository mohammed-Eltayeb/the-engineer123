<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // للسماح بالوصول من النطاق الأمامي

// المفتاح الذي زودتني به
$apiKey = 'AIzaSyC6_zOQuR67ikUPvKMR7WkSf1wgd8dZ0C8';

echo json_encode(['key' => $apiKey]);
?>
