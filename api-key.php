<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // للسماح بالوصول من النطاق الأمامي

// المفتاح الذي زودتني به
$apiKey = 'AIzaSyBfJW8I08SvdNRFqyvIQnHEPWYNbyYOrOA';

echo json_encode(['key' => $apiKey]);
?>

