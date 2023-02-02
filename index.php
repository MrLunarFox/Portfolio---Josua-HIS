
<?php 
  include "header.php";
?>

<body>
  <div class="container"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Accueil
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="presentation.html">Présentation</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Projets / Réalisations</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Sous-page/ProjetA.html">Projet A</a>
                    <a class="dropdown-item" href="Sous-page/ProjetB.html">Projet B</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Expérience professionnel</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Sous-page/StageN°1.html">Stage entreprise A</a>
                    <a class="dropdown-item" href="Sous-page/StageN°2.html">Stage entreprise B</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="veille-technologique.html">Veille technologique</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <article>
        <br>
        <br>
        <h1 class="Titrepage">Accueil</h1>
        <br>
        <br>
        <br>
        <h1 class="Titrepage">Bienvenue sur mon Portfolio!</h1>
        <h1 class="Titrepage2">Josua HIS</h1>
        <h1 class="Titrepage">Je suis étudiant en BTS SIO option SLAM.</h1>
    </article>

<?php 
  include "footer.php";
?>
