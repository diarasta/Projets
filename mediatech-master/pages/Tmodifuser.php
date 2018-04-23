<!--traitement de modification-->
<?php
// include_once "menusimple.php";
$bdd = new PDO('mysql:host=127.0.0.1;dbname=blog', 'diamanka', 'yayebaye');

if(isset($_POST['Modifier'])){
    try {
        extract($_POST);
       // inclusion de la page de connexion a la base de donnée
        $resul=$bdd->query("UPDATE users SET username ='$username',password='$pasword_1'WHERE id =$id");
        header('location:utilisateur.php');
    }
    catch(PDOException $e)
    {
        echo "erreur de modification" . $e->getMessage();
    }

}
?>