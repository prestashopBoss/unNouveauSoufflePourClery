<?php

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
    

?>