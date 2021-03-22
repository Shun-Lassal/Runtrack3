<?php
    session_start();

       if (isset($_GET['d'])){
        session_destroy();
        header('Location: index.php');
    }

?>

<?php
    if(isset($_SESSION['prenom'])){
      echo '<h1>Bienvenue '.$_SESSION['prenom'].'</h1>
       <a href="?d">Deconnexion</a>';
    }else{
        echo '   <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>';
    }
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>JSROYA</title>
</head>
<body>
 
</body>
<script src="script.js"></script>
</html>
