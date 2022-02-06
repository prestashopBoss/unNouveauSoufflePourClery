<?php
include "header_boostrap.php";
require_once "connect_bdd.php";
$sql = "SELECT * FROM user WHERE 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<div class="container">
<div class="row border border-primary">
  <div class="col-2 col-md-2 border border-primary">
      <div class="p-3 border border-primary" style="height: 200px; width: 200px"><?php echo $row['imgProfil']?>
      </div>
</div>
  <div class="col-6 col-md-4 border border-primary">   
        <div>Nom : <?php echo $row['lastName']?><br>
            Prénom : <?php echo $row['firstName']?><br>
            Pseudo : <?php echo $row['pseudo']?>
            </div>
        </div>
            <div class="col-6 col-md-6 border border-primary">
            <div class="p-2">Email : <?php echo $row['email']?>
        </div>
            <div class="p-2">Date d'inscription : <?php echo $row['createDateUser']?>
        </div>
            <div class="p-2">Profession : <?php echo $row['profession']?>
        </div>
        </div>
</div>
</div><!--container1-->
<div class="container">
<div class="row border border-primary">
  <div class="col-2 col-md-2 border border-primary">
      <div class="p-3 border border-primary" style="height: 200px; width: 200px">
      </div>
</div>
  <div class="col-12 col-md-4 border border-primary">
  </div>   
  <div class="col-12 col-md-6 border border-primary">
            Adresse : <?php echo $row['adresse']?><br>
            CP : <?php echo $row['codePostale']?>
            Ville : <?php echo $row['ville']?><br>
            <div class="">Pseudo : <?php echo $row['pseudo']?>
        </div>
            <div class="">Mot de passe : <?php echo $row['MDP']?>
        </div>
            <div class="">Tel.1 : <?php echo $row['numeroTel1']?><?php echo $row['typeTelephone']?>
        </div>
            <div class="">Tel.2 : <?php echo $row['numeroTel1']?><?php echo $row['typeTelephone2']?>
        </div>
            <div class="">Tel.2 : <?php echo $row['numeroTel1']?><?php echo $row['typeTelephone3']?>
        </div>
        </div>
</div>
</div><!--container2-->
<?php }}?>