<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="./Image/4365933.png" /><link rel="shortcut icon" type="image/x-icon" href="./Image/4365933.png" />
    <title>Portfolio - Josua HIS</title>
    <style>
        .Titrepage {
            color: rgb(255, 255, 255);
            text-align: center;
        }
        .Titrepage2 {
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: 500%;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .nav-item {
            text-align: center;
        }
    </style>
    <style> /*Background floue*/
        body {
position: absolute;
        top: 0; bottom: 0; left: 0; right: 0;
        height: 100%;
    margin:0;
    padding:0;
    background-size: 100% ;
    width:100%;  
    color:black;
}
body:before {
        content: "";
        position: fixed;
        height: 100%; width: 100%;
        background: url(Image/code-source-de-bureau-et-technologie-contexte-developpeur-ou-programmeur-en-matiere-de-codage-et-de-programmation-le-papier-peint-par-le-langage-informatique-et-le-code-source-com-pf3nra.jpg);
        background-size: cover;
        z-index: -1; /* Keep the background behind the content */     
        -webkit-filter: blur(8px);
    -webkit-background-size: cover; /* pour Chrome et Safari */
    -moz-background-size: cover; /* pour Firefox */
    -o-background-size: cover; /* pour Opera */
    background-size: cover; /* version standardisée */
    }
    </style>
</head>
<body>
  <div class="container"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="../index.php">Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Accueil
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../presentation.php">Présentation</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Projets / Réalisations</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Sous-page/ProjetA.php">Projet A</a>
                    <a class="dropdown-item" href="Sous-page/ProjetB.php">Projet B</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Expérience professionnel</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Sous-page/StageN°1.php">Stage entreprise A</a>
                    <a class="dropdown-item" href="Sous-page/StageN°2.php">Stage entreprise B</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../veille-technologique.php">Veille technologique</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>