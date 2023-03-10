<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Art</title>
  <!-- Reset CSS -->
  <link rel="stylesheet" href="/src/css/reset.css">

  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Load CSS -->
  <link rel="stylesheet" href="/src/css/stylesheet.css">

  <script defer src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script defer src="/src/js/cta-cookie.js"></script>
</head>

<?php
//load config

require_once 'config.php';

//load php scripts
?>

<style>
  <?php
  echo (':root{ font-size:' . $_COOKIE['fontSize'] . 'px;}');
  ?>
</style>

<body onload="ctaCookies()">

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/src/images/logo.svg" alt="Logo B'Art Deaux"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <a class="nav-link" aria-current="page" href="/">
            <li class="nav-item">
              Accueil
            </li>
          </a>
          <a class="nav-link" aria-current="page" href="/views/frontend/all_articles.php?numThem=all">
            <li class="nav-item">
              Nos articles
            </li>
          </a>
          <?php
          if (isset($_SESSION['numStat'])) {
          ?>
            <a class="nav-link" aria-current="page" href="/api/connexion/logout.php">
              <li class="nav-item">
                D??connexion
              </li>
            </a>
          <?php
          } else { ?>
            <a class="nav-link" aria-current="page" href="/login.php">
              <li class="nav-item">
                Se connecter / s'inscrire
              </li>
            </a>
          <?php
          }
          ?>
          <?php
          if (check_access(2)) {
          ?>
            <a class="nav-link" href="/views/backend/dashboard.php">
              <li class="nav-item">
                Admin
              </li>
            </a>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <section class="accessibility-features">
    <?php
    if(isset($_SESSION['numStat'])) {
    ?>
      <p>Bienvenue
        <span><?php
        echo (' ' . $_SESSION['pseudoMemb']); ?></span>, <br>
        vous ??tes bien connect????e !
      </p>
    <?php
    } ?>
    <div>
    <button type="button" class="btn" onclick="increaseSize()">Agrandir la police <img src="/src/images/trending_up_FILL0_wght400_GRAD0_opsz48.svg" alt="Bouton agrandir le texte"></button>
    <button type="button" class="btn" onclick="decreaseSize()">R??duire la police <img src="/src/images/trending_down_FILL0_wght400_GRAD0_opsz48.svg" alt="Bouton r??duire le texte"></button>
    <button type="button" class="btn" onclick="resetSize()">R??initialiser<img src="/src/images/restart_alt_FILL0_wght400_GRAD0_opsz48.svg" alt="R??initialiser taille"></button>
    </div>
  </section>

  <div class="backdrop-cookie">
    <div class="cookie-popup">
      <p> ?? des fins d???accessibilit?? nous utilisons des cookies pour am??liorer votre exp??rience de navigation. </p>
      <p><span>Les cookies que nous utilisons n???ont aucun but commercial. </span></p>
      <p>Pour en savoir plus, consultez notre <a href="#">politique de confidentialit??.</a></p>
      <div>
        <button type="button" class="btn btn-danger" onclick="refuseCookie()">Refuser</button>
        <button type="button" class="btn btn-success" onclick="acceptCookie()">Accepter</button>
      </div>
    </div>
  </div>