<?php 
include "header_boostrap.php";
require_once "connect_bdd.php";

$sql = "SELECT * FROM user WHERE 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<div class="container">
    <div class="row pt-4">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date d'inscription</th>
      <th scope="col">Adresse</th>
      <th scope="col">Code Postale</th>
      <th scope="col">Ville</th>
      <th scope="col">Numero Tel 1</th>
      <th scope="col">Numero Tel 2</th>
      <th scope="col">Numero Tel 3</th>
      <th scope="col">Profession</th>
      <th scope="col">Bio</th>
      <th scope="col">img</th>
      <th scope="col">Pseudo</th>
      <th scope="col">MDP</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['iduser'];?></th>
      <td><?php echo $row['firstName'];?></td>
      <td><?php echo $row['lastName'];?></td>
      <td><?php echo $row['createDateUser'];?></td>
      <td><?php echo $row['adresse'];?></td>
      <td><?php echo $row['codePostale'];?></td>
      <td><?php echo $row['ville'];?></td>
      <td><?php echo $row['numeroTel1'].' ';?><?php echo $row['typeTelephone'];?></td>
      <td><?php echo $row['numeroTel2'].' ';?><?php echo $row['typeTelephone2'];?></td>
      <td><?php echo $row['numeroTel3'].' ';?><?php echo $row['typeTelephone3'];?></td>
      <td><?php echo $row['profession'];?></td>
      <td><?php echo $row['commentaire1'];?></td>
      <td><?php echo $row['imgProfil'];?></td>
      <td><?php echo $row['pseudo'];?></td>
      <td><?php echo $row['MDP'];?></td>
      <td><?php echo $row['email'];
      }?></td>
    </tr>
  </tbody>
</table>
    </div></div>
<?php 
$con->close();
}
else{
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