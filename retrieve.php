<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$db = new PDO('mysql:host=localhost;dbname=todo;charset=utf8','root','');
$sql = "select * from task";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
header('HTTP/1.1 200 OK');
echo json_encode($results);