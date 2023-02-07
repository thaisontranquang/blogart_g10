<!DOCTYPE html>
<html>

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
  <script src="/src/js/fontsize-feature.js" defer></script>
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>

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
          <a class="nav-link" aria-current="page" href="/">
            <li class="nav-item">
              Nos articles
            </li>
          </a>
          <a class="nav-link" aria-current="page" href="/views/frontend/login_register.php">
            <li class="nav-item">
              Se connecter / s'inscrire
            </li>
          </a>
          <a class="nav-link" href="/views/backend/dashboard.php">
            <li class="nav-item">
              Admin
            </li>
          </a>
        </ul>
      </div>
    </div>
  </nav>

  <section class="accessibility-features">
    <button type="button" class="btn" onclick="increaseFontSize()">Agrandir la police ? <img src="/src/images/add_circle_FILL0_wght400_GRAD0_opsz48.svg" alt="Bouton agrandir le texte"></button>
  </section>

  <div class="backdrop-cookie">
    <div class="cookie-popup">
      <p> À des fins d’accessibilité nous utilisons des cookies pour améliorer votre expérience de navigation. </p>
      <p><span>Les cookies que nous utilisons n’ont aucun but commercial. </span></p>
      <p>Pour en savoir plus, consultez notre <a href="#">politique de confidentialité.</a></p>
      <div>
        <button type="button" class="btn btn-danger" onclick="refuseCookie()">Refuser</button>
        <button type="button" class="btn btn-success" onclick="acceptCookie()">Accepter</button>
      </div>
    </div>
  </div>