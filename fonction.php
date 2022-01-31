<?php
function verif_connect(){
    if(!$_SESSION){
        echo '<script>location.replace("http://clery-info.fr");</script>';
    }
}
?>