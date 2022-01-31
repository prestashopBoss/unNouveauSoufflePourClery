<?php
session_start();
include "fonction.php";
verif_connect();
include "head.php";
var_dump($_SESSION) . " est connecté";

function logout(){
session_start();
$_SESSION = array();
session_destroy();
echo '<script> location.replace("http://localhost/authentifoudation/"); </script>';

}
?>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
<a href="http://clery-info.fr"><button class="btn btn-outline-success form-control m-2" type="button">Page d'accueil</button></a>
<a href="<?php logout(); ?>"><button class="btn btn-outline-success form-control m-2" type="button">Logout</button></a>
