<?php
$db = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');

$query = $db->prepare('SELECT * FROM utilisateurs');
$query->execute();

echo json_encode($query->fetchAll());