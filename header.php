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

<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/src/images/logo.svg" alt="Logo B'Art Deaux"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Nos articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/views/backend/login.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/views/backend/register.php">S'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="accessibility-features">
<button type="button" class="btn" onclick="increaseFontSize()">Agrandir la police ? <img src="/src/images/add_circle_FILL0_wght400_GRAD0_opsz48.svg" alt="Bouton agrandir le texte"></button>
<button type="button" class="btn">Réduire la police ? <img src="/src/images/add_circle_FILL0_wght400_GRAD0_opsz48.svg" alt="Bouton agrandir le texte"></button>
</section>
