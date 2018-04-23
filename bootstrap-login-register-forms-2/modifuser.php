


<?php
$bdd= new PDO('mysql:host=127.0.0.1;dbname=blog','diamanka','yayebaye');
include 'Tmodifuser.php';

//echo $_GET['id'];
$id= $_GET['id'];
if(isset($_GET['id'])){

    $idc= $_GET['id'];
    $req=$bdd->query("SELECT * FROM users WHERE id=$id");
    while($row = $req-> fetch()){
    ?>


    <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Diamanka</title>
<meta name="description" content="">
<meta name="author" content="771348071">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">


</head>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <div class="container col-md-6 col-md-offset-3 ">
        <body>
            <div class="panel panel-info">
                <div class="panel-heading">Formulaire de modification</div>
                <div class="panel-body">
                    <form method="POST" action="Tmodifuser.php">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <label class="control-label" >Username</label>
                            <input class="form-control" type="text" name="username" value="<?= $row['username']?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Email</label>
                            <input class="form-control" type="text" name="email" value="<?=$row['email']?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input class="form-control" type="text" name="password" value="<?=$row['password']?>"/>
                        </div>
                        
                        <div>
                            <input class="btn btn-success" type="submit" name="Modifier" value="Modifier"/>
                           <a href="administrateur.php"  <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>Retour </a> 
                        </div>
                    </form>

                </div>
            </div>
        </div>
</body>
<?php
    }
}
?>
</html>