<?php 
include "connect_bdd.php";

/*-----------------------------------------*/
            /*Valide */
/*-----------------------------------------*/
if(isset($_POST) & !empty($_POST)){
    $firstName = ($_POST['firstName']);
    $lastName = ($_POST['lastName']);
    $dateNow = date("d.m.y");
    $adresse =($_POST['adresse']);
    $codePostale =($_POST['codePostale']);
    $ville =($_POST['ville']);
    $numeroTel1 = ($_POST['numeroTel1']);
    $numeroTel2 = ($_POST['numeroTel2']);
    $numeroTel3 =($_POST['numeroTel3']);
    $profession =($_POST['profession']);
    $commentaire1 =($_POST['commentaire1']);
    $typeTelphone1 = ($_POST['typeTelephone']);
    $typeTelphone2 = ($_POST['typeTelephone2']);
    $typeTelphone3 = ($_POST['typeTelephone3']);
    $pseudo =($_POST['pseudo']);
    $MDP =($_POST['MDP']);
    $email =($_POST['email']);

    $sql = "INSERT INTO `user` (firstName, lastName, createDateUser, adresse, codePostale, ville, numeroTel1, numeroTel2, numeroTel3, profession, commentaire1, imgProfil, typeTelephone, typeTelephone2, typeTelephone3, pseudo, MDP, email ) VALUES ('$firstName', '$lastName', '$dateNow',  '$adresse', '$codePostale', '$ville', '$numeroTel1', '$numeroTel2', '$numeroTel3', '$profession', '$commentaire1', '?', '$typeTelphone1', '$typeTelphone2', '$typeTelphone3', '$pseudo', '$MDP', '$email')";
    
    if ($con->query($sql)) {
        $message = "Insertion success !";
        
        
    }else{
        $error = "Insertion NOK";
    }
    
}

include "header_boostrap.php";
//var_dump($firstName, $lastName, $pseudo,$MDP,$email, $dateNow);
?>
<!--  -->
<?php 
    if (isset($message)):?>
        <div class="container alert alert-success col-md-6 pt-4" role="alert">
            <h3>Request succefully !</h3>
        </div>
<?php
    else:?>
        <div class="container alert alert-danger col-md-6 pt-4" role="alert">
        
            <h3>Request failed !</h3>
        </div>
        
<?php 
echo '<h3 style= "color :red">Connexion  a la BDD : </h3>'; 
var_dump($con);
echo '<br>';
echo '<h3 style= "color :red">Requête SQL : </h3><br>';
var_dump($sql);
echo '<h3 style= "color :red">Error SQL : </h3><br>';
if ($con->error) {
    printf("Errormessage: %s\n", $con->error);
 }    
endif; 
echo '</div>';
?>

<div class="d-flex justify-content-center">
    <div class="d-flex align-items-center">
        <!-- FORM -->
        <form action="" method="POST" class="form-horizontal pt-4">
            <h2>Inscription</h2>

            <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm">
                <input type="text" name="firstName" class="form-control" require>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Prenom</label>
            <div class="col-sm">
                <input type="text" name="lastName" class="form-control" require>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Pseudo</label>
            <div class="col-sm">
                <input type="text" name="pseudo" class="form-control" require>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Mot de passe</label>
            <div class="col-sm">
                <input type="text" name="MDP"  class="form-control" require>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Photo de profil</label>
            <div class="col-sm">
                <textarea type="texteaera" name="commentaire1" class="form-control" ></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Email</label>
            <div class="col-sm">
                <input type="email" name="email" class="form-control" >
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Adresse</label>
            <div class="col-sm">
                <input type="text" name="adresse" class="form-control" >
            </div>
        </div>
        
        <div class="form-group">
            <label for="input1" class="col-sm control-label">Code Postale</label>
            <div class="col-sm">
                <input type="text" name="codePostale" class="form-control" >
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Ville</label>
            <div class="col-sm">
                <input type="text" name="ville" class="form-control" >
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Profession</label>
            <div class="col-sm">
                <input type="text" name="profession" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label for="input1" class="col-sm control-label">commentaires</label>
            <div class="col-sm">
                <textarea type="texteaera" name="commentaire1" class="form-control" ></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm">
                <input type="hidden" name="createDateUser" class="form-control" value=<?php echo $dateNow; ?> >
            </div>
        </div>


        <div class="form-group">
            <label for="input1" class="col-sm control-label">Téléphone 1</label>
            <div class="col-sm">
                <input type="text" name="numeroTel1" class="form-control" require>
                <select name="typeTelephone" class="custom-select">
                        <option value="mobile">Mobile</option>
                        <option value="fix">Fix</option>
                        <option value="pro">Pro</option>
                    </select>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Téléphone 2</label>
            <div class="col-sm">
                <input type="text" name="numeroTel2" class="form-control" require>
                <select name="typeTelephone2" class="custom-select">
                        <option value="mobile">Mobile</option>
                        <option value="fix">Fix</option>
                        <option value="pro">Pro</option>
                    </select>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm control-label">Téléphone 3</label>
            <div class="col-sm">
                <input type="text" name="numeroTel3" class="form-control" require>
                <select name="typeTelephone3" class="custom-select">
                        <option value="mobile">Mobile</option>
                        <option value="fix">Fix</option>
                        <option value="pro">Pro</option>
                    </select>
            </div>
        </div>

    <!--BUTTON FORM-->
        <div class="pt-4">
            <input type="submit" value="submit" class="btn btn-outline-primary m-3">
            <a href="view.php">
                <button class="btn btn-outline-success m-3" type="button">Voir la liste</button>
            </a>
        </div>

        </form>
        <!-- FORM -->
    </div>
    </div>

<?php 
include "footer_boostrap.php";
$con->close();
?>