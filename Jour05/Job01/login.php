<?php
session_start();
var_dump($_SESSION);
$db = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');

$email = trim(htmlspecialchars($_POST['email']));
$password = trim(htmlspecialchars($_POST['password']));


$query = $db->prepare("SELECT * FROM utilisateurs WHERE email = '$email'");
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);
if($result == NULL){
    exit(false);
}
$cryptedpass = $result->password;

if (password_verify($password, $cryptedpass)) {
    $_SESSION['prenom'] = $result->prenom;
    echo true;
}
else {
    echo false;
}
?>