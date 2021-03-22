
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body style="margin:0px;">
    <header>
      <nav class="light-green accent-2 row z-depth-4">
        <a href="#" class="col s3 center light-green-text text-darken-4">Accueil</a>
        <a href="#" class="col s3 center light-green-text text-darken-4">Inscription</a>
        <a href="#" class="col s3 center light-green-text text-darken-4">Connexion</a>
        <a href="#" class="col s3 center light-green-text text-darken-4">Rechercher</a>
      </nav>
    </header>
    <section>
      <form class="container z-depth-4 center black-text" style="padding-bottom:20px;width:50%;" action="index.html" method="post">
        <div class="center">
          <h1>Inscription</h1>
          <p>
            <label>
              <i class="black-text small material-icons">accessibility</i>
              <input name="M" type="radio" value="M"/>
              <span>M</span>
            </label>
            <label>
              <input name="F" type="radio" value="F"  />
              <span>F</span>
            </label>
          </p>
          <i class="black-text small material-icons">assignment_ind</i>
        </div>
        <div class="">
          <label for="prenom">Prénom</label></br>
          <input style="width:50%;" class="center" type="text" name="prenom" placeholder="Richard"></br>
          <label for="nom">Nom</label></br>
          <input style="width:50%;" class="center" type="text" name="nom" placeholder="Pierre"></br>
          <i class="black-text small material-icons">home</i></br>
          <label for="adresse">Adresse</label></br>
          <input style="width:50%;" class="center" type="text" name="adresse" placeholder="Adresse"></br>
          <i class="black-text small material-icons">contact_mail</i></br>
          <label for="email">E-mail</label></br>
          <input style="width:50%;" class="center" type="text" name="email" placeholder="E-mail"></br>
          <i class="black-text small material-icons">lock</i></br>
          <label for="password">Mot de passe</label></br>
          <input style="width:50%;" class="center" type="password" name="password" placeholder="password"></br>
          <i class="black-text small material-icons">lock_outline</i></br>
          <label for="cpassword">Confirmez Mot de passe</label></br>
          <input style="width:50%;" class="center" type="password" name="cpassword" placeholder="password"></br>
          <div class="center">
            <p>
              <label>
                <input type="checkbox" />
                <span>Informatique</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox" />
                <span>Voyages</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox" />
                <span>Sport</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox" />
                <span>Lecture</span>
              </label>
            </p>
          </div>
          <button class="btn-large waves-effect waves-light light-green accent-2" type="submit" name="action">Valider le formulaire
            <i class="material-icons right">>></i>
          </button>
        </div>
      </form>
    </section>
    <footer class="page-footer light-green darken-4" style="margin-top:30px;">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <h5 class="white-text">Footer Content</h5>
               <p class="light-green-text text-accent-2">You can use rows and columns here to organize your footer content.</p>
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="white-text">Links</h5>
               <ul>
                 <li><a class="light-green-text text-accent-2" href="#!">Link 1</a></li>
                 <li><a class="light-green-text text-accent-2" href="#!">Link 2</a></li>
                 <li><a class="light-green-text text-accent-2" href="#!">Link 3</a></li>
                 <li><a class="light-green-text text-accent-2" href="#!">Link 4</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div class="footer-copyright">
           <div class="container">
           La Plateforme_
           <a class="grey-text text-lighten-4 right" href="#!">Materialize</a>
           </div>
         </div>
       </footer>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
