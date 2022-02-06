<?php
function verif_connect(){
    if(!$_SESSION){
        echo '<script>location.replace("http://clery-info.fr");</script>';
    }
}
function retour_error(){
    echo '<h3 style= "color :red">Connexion  a la BDD : </h3>'; 
var_dump($con);
echo '<br>';
echo '<h3 style= "color :red">Requête SQL : </h3><br>';
var_dump($sql);
echo '<h3 style= "color :red">Error SQL : </h3><br>';
if ($con->error) {
    printf("Errormessage: %s\n", $con->error);
 }
}
?>