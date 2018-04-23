<!--traitement de modification-->
<?php
// include_once "menusimple.php";
$bdd= new PDO('mysql:host=127.0.0.1;dbname=blog','diamanka','yayebaye');
if(isset($_GET['id'])){
    try {
        $id = $_GET['id'];
        extract($_POST);
   
        $resul=$bdd->query("DELETE FROM users WHERE id = $id");
        header('location:administrateur.php');
    }
    catch(PDOException $e)
    {
        echo "erreur de suppression" . $e->getMessage();
    }

}
?>