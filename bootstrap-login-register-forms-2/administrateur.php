<?php 
  session_start(); 

 
$bdd= new PDO('mysql:host=127.0.0.1;dbname=blog','diamanka','yayebaye');
$utilisareurs=$bdd->query('SELECT * FROM users ORDER BY id');
if (isset($_GET['supprime']) AND !empty($_GET['supprime']))
{
  $supprime=(int)$_GET['supprime'];
  $req=$bdd->prepare('DELETE FROM users WHERE id= ?');
    $req->execute(array($supprime));
}

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
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
  
      <a class="navbar-brand"  href="#" style="color: white;">Page de l'administrateur</a>

      <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Deconnexion</a></li>
          </ul>
    </div>
        </div>
            </nav>



   <div>
   	<h2 style="color: white;" align="center"> Liste des utilisareurs actuellement membres</h2>
   </div>
           <div>
                
                

              </div>







              <div class="container">
    <div class="panel panel-info">
        <div class="panel-heading" style="background-color: black;color: white;" align="center">Liste des Utilisateurs</div>
        <div class="panel-body">
            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                <tr>
                    <th>Numero</th>
                    <th>username</th>
                      <th>email</th>
                    <th>Password_1</th>
        
            
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <?php
             
       
                $req=$bdd->query('SELECT * FROM users');
                while ($res=$req->fetch()) {
                    $id = $res['id'];
                    ?>
                    <tr>
                        <td> <?php echo $res['id']?> </td>
                        <td> <?php echo $res['username']?> </td>
                        <td> <?php echo $res['email']?> </td>
                        <td> <?php echo $res['password']?> </td>
                   
                  
                        <td><?php echo" <a href=\"modifuser.php?id= $id\" >Modifier</a>";?> </td>
                        <td><?php echo" <a onclick=\"return confirm('vous allez le supprimer ');\" href=\"supuser.php?id= $id\" >Supprimer</a>";?> </td>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

                <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
          <script src="assets/js/jquery.confirm.js"></script>
        

  

</body>
</html>



