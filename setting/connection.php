<?php
  $db_host = 'localhost';
  $db_user = 'GABES2025';
  $db_password = 'GABES2025';
  $db_db = 'GABES2025';
  $conn = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
  );
	
  if ($conn->connect_error) {
    echo 'Errno: '.$conn->connect_errno;
    echo '<br >';
    echo 'Error: '.$conn->connect_error;
    exit();
  }

?>