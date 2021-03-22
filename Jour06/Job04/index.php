<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <title>Document</title>
</head>
<body>
<header>
<div id='header'>
<a class="headerlink">Accueil</a>
<a class="headerlink">Presentation</a>
<a class="headerlink">Contact</a></div>
<button type='button' class='hamburger' onclick='myFunction()'>
  Hamburger
</button>
</header>
    <script>
        function myFunction() {
  var x = document.getElementById("header");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
    </script>
</body>
</html>
