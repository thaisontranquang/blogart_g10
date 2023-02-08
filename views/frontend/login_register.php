<?php require_once '../../header.php';
sql_connect();

sql_select('MEMBRE', "'eMailMemb','passMemb'")

session_start();
if(isset($_POST['eMailMemb']) && isset($_POST['passMemb']))
{
 
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
        nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
            if($count!=0) // nom d'utilisateur et mot de passe correctes
            {
            $_SESSION['username'] = $username;
            header('Location: principale.php');
            }
            else
            {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
            }
            else
            {
            header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
            }
            }
            else{
        header('Location: login.php');
    }
mysqli_close($db); // fermer la connexion
?>


?>

<?php require_once '../../footer.php';
