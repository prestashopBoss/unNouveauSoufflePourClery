<?php 
session_start();
include "head.php";
if (isset($_POST['valider'])) {
  if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
    $pseudo = "admin";
    $mdp = "admin1234";

  $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
  $mdp_saisi = htmlspecialchars($_POST['mdp']);
  if ($pseudo_saisi == $pseudo && $mdp_saisi = $mdp){
    $_SESSION['mdp'] = $mdp_saisi;
    
}else{
  echo '<script>window.confirm("Une nouvelle fenêtre va s\'ouvrir.");</script>';
}
} 
}
?>

<div class="container pt-5 pb-6">
  <div class="row">
      <div class="col">
        <input type="hidden" name="">
      </div>
      <!--  -->
      <div class="col  pt-5 pb-5">
        <form action="" method="post" >
          <div class="form-group">
          <label>Login</label>
            <input class="form-control m-2" type="text" name="pseudo" placeholder="Enter your ID">
          </div>
        <div class="form-group">
          <label>Password</label>
            <input class="form-control m-2" type="password" name="mdp" placeholder="Enter your password">
          </div>
          <input class="btn btn-outline-success form-control m-2" type="submit" name="valider" value="Submit">
        </form>
        <a href="http://clery-info.fr"><button class="btn btn-outline-success form-control m-2" type="button">Page d'accueil</button></a>
      </div>
      <!--  -->
      <div class="col">
      </div>
    </div>    
  </div>
  </body>
</html>