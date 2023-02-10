README.md
-----------------

Projet MMI 2023

## Fonctionnalités

=> Implémentées : Blog responsive, pop-up acceptation cookies, CRUD articles, CRUD membres, CRUD likes, CRUD statuts, CRUD thématiques, CRUD commentaires, CRUD mots-clés, ajustement de la police selon utilisateur, inscription et connexion avec $_SESSION, affichage des derniers articles, affichage de tous les articles, affichage d'un article, affichage des articles par thématique, ajout d'une image dans un article.
=> Non implémentées : Suppression/édition d'un commentaire côté front-office, unliker un article côté front-office, modifier son pseudonyme, mode nuit, afficher mot de passe à l'inscription/la connexion, modifier la photo d'un article. 

## Panel Admin

Accessible depuis : /index.php

## Panel front

Accessible depuis : /views/backend/dashboard.php

**Identifiant localhost**

> admin : 
> email : ??  
> pass : ??
> mdp : ???  

> membre :
> email : ??  
> pass : ??
> mdp : ???  

**Identifiant url iut (si différent de localhost)**

> admin :
> email : ??  
> pass : ??
> mdp : ???  

> membre :
> email : ??  
> pass : ??
> mdp : ???  

### Structure et règles de la Base de données

La base de données fournie :
=> la votre épurée et mise à jour

### Pour les utilisteurs/super-admin

> vous précisez tout ce qui vous semble pertinent

### Pour les utilisteurs/membres

> vous précisez tout ce qui vous semble pertinent

### Pour les articles

> idem

### Pour les commentaires

> Seuls les utilisateur connectés peuvent ajouter des commentaires. L'édition ou la suppression n'est pour le moment pas disponible aux utilisateurs non administrateurs/modérateurs. 

### Pour les likes

> Les likes sont affichés à tous les utilisateurs mais le sql_insert() est conditionné par la connexion ou non de l'utilisateur avec son compte. 

### Pour les autres éléments pertinents à nous préciser

> Utilisation de la technologie SCSS pour le style. 
> Utilisation d'une librairie OpenSource sur github pour faciliter la manipulation des cookies en JavaScript lors de l'agrandissement/rétrécissement de la font-size du root : https://github.com/js-cookie/js-cookie/tree/latest#readme
