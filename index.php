<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('H:i');
header('Content-Type: application/json');
echo json_encode(['time' => $time]);
?>
