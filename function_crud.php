<?php 
function select_profil(){
    require_once "connect_bdd.php";
    $sql = "SELECT * FROM clery WHERE 1";
    $result = $con->query($sql);

}

function update_profil(){

}

function insert_profil(){
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'clery';
    $success = 'Success: A proper connection to MySQL was made ' .$db_db .'<br>';
    
    $con = @new mysqli(
      $db_host,
      $db_user,
      $db_password,
      $db_db
    );
    
    if ($con->connect_error) {
      echo 'Errno: '.$con->connect_errno;
      echo '<br>';
      echo 'Error: '.$con->connect_error;
      exit();
    }
    echo $success;
    if(isset($_POST) & !empty($_POST)){
        $firstName = ($_POST['firstName']);
        $lastName = ($_POST['lastName']);
        $pseudo =($_POST['pseudo']);
        $MDP =($_POST['MDP']);
        $email =($_POST['email']);
        $dateUSer = ($_POST['createDateUser']);
        
    
        $sql = "INSERT INTO `user` (lastName, firstName, pseudo, MDP, email, createDateUser ) VALUES ('$firstName', '$lastName', '$pseudo', '$MDP', '$email', '$dateUSer')";
        
        if ($con->query($sql)) {
            $message = "Insertion success !";
        }else{
            if ($con->connect_error) {
                echo 'Errno: '.$con->connect_errno;
                echo '<br>';
                echo 'Error: '.$con->connect_error;
                exit();
              }
        }
        $con->close();
        
    }

}

function delete_profil(){
    
}


?>