<?php

include "connect_bdd.php";
  if(isset($_POST["valider"])){
    $status = 'error';
    if(!empty($_FILES["bin"]["name"])){
      $fileName = basename($_FILES["bin"]["name"]);
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

      $allowTypes = array('jpg','png','jpeg','gif');
      if(in_array($fileType, $allowTypes)){
          $image = $_FILES['bin']['tmp_name'];
          $imgContent = addslashes(file_get_contents($image));
          $sql = "INSERT INTO `images` (bin, created) VALUES ('".$imgContent."', NOW())";
          $insert = $con->query($sql);

    if ($insert) {
      $status = 'success';
      $StatusMsg = "Insertion success !";
          }
          else{
            $StatusMsg = "File upload failed";
          }
        }
          else{
            $StatusMsg = "only jpg, jpeg, png,, gif file ";
          }
        }
          else{
            $StatusMsg =  "Please select an image file to upload";
          }
        }
  
  include "header_boostrap.php";
?>
<div class="container">
  <h1>Upload end store image in Database using PHP
    <div class="wrapper">
  </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-groupe">
          <label for="image">Select Image File</label>
          <input type="file" name="bin" class="form-control" >
          <input type="submit" value="Charger" name="valider">
        </div>
    </form>
  </div>
  </div>

  <?php 
// Include the database configuration file  
 
// Get image data from database 
$result = $con->query("SELECT bin FROM images ORDER BY id_images DESC"); 

if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img style="width : 150px; height : auto;" src="data:bin/jpg;charset=utf8;base64,<?php echo base64_encode($row['bin']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
  
    <p class="status error">Image(s) not found...</p> 
<?php } 

?>

</body>
</html>