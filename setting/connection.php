<?php
  echo "I am the code already";
  $db_host = '127.0.0.1';
  $db_user = 'GABES2025';
  $db_password = 'Team9';
  $db_db = 'GABES2025';
  $conn = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
  );

  if ($conn->connect_error) {
    echo "The error has happened";
    echo 'Errno: '.$conn->connect_errno;
    echo '<br >';
    echo 'Error: '.$conn->connect_error;
   
  }

  else{

    $query = "INSERT INTO Users (UserID, FirstName, LastName, Passwd, Email, UserType) VALUES (NULL, '    Aline', 'Kubwimana', '123jye', 'aline.nurerwanayo@ashesi.edu.gh', 1)";
    $conn->query($query);

    echo"Success";
  }


