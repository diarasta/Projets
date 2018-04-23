<!--traitement de modification-->
<?php
$bdd= new PDO('mysql:host=127.0.0.1;dbname=blog','diamanka','yayebaye');
// include_once "menusimple.php";
if(isset($_POST['Modifier'])){
    try {
        extract($_POST);
   // inclusion de la page de connexion a la base de donnée
        $resul=$bdd->query("UPDATE users SET username ='$username',email='email',password ='$password' WHERE id =$id");
        header('location:administrateur.php');
    }
    catch(PDOException $e)
    {
        echo "erreur de modification" . $e->getMessage();
    }

}
if(isset($_POST['annuler'])){
    header('location:administrateur.php');
      }
?>