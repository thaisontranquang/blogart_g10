<!-- ne pas oublier de hacher le mdp, lorsque l'utilisateur saisit un mdp, on le hache et c'est ce mdp haché que l'on retient dans la BDD-->

sql -> password_hash
    password_verify

<!-- une fois que le mdp est bon, on utilise les sessions (comme des cookies au niveau serveur), on stocke id_user dans le session start
-->
$_SESSION
session_start

<!-- le escape s'assure que des qu'il y a un caractère spécial, il met un \ devant pour que ce soit considéré comme un caractère écrite par l'utilisateur -->
<!-- à la fin session destroy -->

appel tout le temps la connexion en début 

$_SESSION['id user = nom de session']