<?php 
session_start();
include "head.php";
if (isset($_POST['valider'])) {
  if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
  $pseudo = "admin";
  $mdp = "admin1234";

  $gg = ' ';

  $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
  $mdp_saisi = htmlspecialchars($_POST['mdp']);
  if ($pseudo_saisi == $pseudo && $mdp_saisi = $mdp){
    $_SESSION['mdp'] = $mdp_saisi;
    echo '<script> location.replace("index.php");</script>';

}else{
  echo '<script>window.alert("Veuillez remplir les champs correctement")</script>';
}
} 
}
?>
    
</body>
</html>
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
           <a href="index.php"><input class="btn btn-outline-success form-control m-2" type="submit" name="valider" value="Index"></a>
        </form>
      </div>
      <!--  -->
      <div class="col">
      </div>
    </div>
      </div>

