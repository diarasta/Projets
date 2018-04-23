


<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=blog', 'diamanka', 'yayebaye');

include 'Tmodifuser.php';

//echo $_GET['id'];
$id= $_GET['id'];
if(isset($_GET['id'])){
    var_dump(id);
    $idc= $_GET['id'];
    $req=$bdd->query("SELECT * FROM users WHERE id=$id");
    while($row = $req-> fetch()){
    ?>
        <div class="container col-md-6 col-md-offset-3 ">
            <div class="panel panel-info">
                <div class="panel-heading">Formulaire de modification</div>
                <div class="panel-body">
                    <form method="POST" action="Tmodifuser.php">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <label class="control-label" >username</label>
                            <input class="form-control" type="text" name="nom" value="<?= $row['username']?>"/>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">password</label>
                            <input class="form-control" type="text" name="pwd" value="<?=$row['password_1']?>"/>
                        </div>
                        
                       
                        <div>
                            <input class="btn btn-success" type="submit" name="Modifier" value="Modifier"/>
                            <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>

<?php
    }
}
?>