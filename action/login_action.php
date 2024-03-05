
<?php
session_start();
include("../setting/connection.php");

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password'] ): '';

$email = htmlspecialchars($email, ENT_QUOTES,'UTF-8');
$password= htmlspecialchars($password, ENT_QUOTES,'UTF-8');
  
  $sql = "SELECT UserID, UserType, Passwd FROM People WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
      $row = mysqli_fetch_assoc($result);
  
      if ($row) {


          $hashedPasswordFromDatabase = $row['Passwd'];
  
          if (password_verify($password, $hashedPasswordFromDatabase)) {

            $_SESSION['userId']=$row['UserID'];
            $_SESSION['userRole']=$row['UserType'];
            header("Location:../view/homepage.php");
          } else {

            $_SESSION['loginFailed'] = true;
           

            header("Location:../login/login_view.php");
          }
        
        }
    else{

      $_SESSION['loginFailed'] = true;
      header("Location:../login/login_view.php");
      exit();




    }
      
  } else {
    $handler = true;
    $_SESSION['loginFailed'] = true;
    echo "Error: " . mysqli_error($conn);
    header("Location:../login/login_view.php");
    exit();
    
  }

  mysqli_close($conn);
?>