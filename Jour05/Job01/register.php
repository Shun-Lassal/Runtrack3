<?php
    $nom = trim(htmlspecialchars($_POST['nom']));
    $prenom = trim(htmlspecialchars($_POST['prenom']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $cpassword = trim(htmlspecialchars($_POST['cpassword']));
    

    $db = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');

    $query = $db->prepare("SELECT email FROM utilisateurs WHERE email ='$email'");
    $query->execute();
    $result= $query->fetchAll();
    
    if($result == null){
        if($password == $cpassword){
            $password = password_hash($password, PASSWORD_BCRYPT);
            $query = $db->prepare("INSERT INTO utilisateurs (nom , prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')");
            $query->execute();
            header('Location: connexion.php');
        }else{
            echo 'Les mots de passe de correspondent pas';
        }
    }else{
        echo 'email deja utiliser';
    }

?>