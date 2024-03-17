<?php
session_start();
$gymid = 0;
include("../setting/connection.php");
include("../function/gymmangement.php");
if(isset($_POST['GymID'])){
    $_SESSION["gymId"] = $_POST['GymID'];
    $gymid = $_SESSION["gymId"];
    unset($_SESSION["gymId"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Zm+8D2CzPmTWzzb1R5v4Zc56BKvnz9gSNZ+ExjNB6jsqK+iPmFiVqg04I32hFDYufyGKLkALXkgDlNIZ4exEjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/management.css">
<title>MANAGEMENT</title>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <h1>Gym Dashboard</h1>
        <ul>
            <li><a href="javascript:void(0);" onclick="toggleContent('trainers')"><img src="../assets/trainer.png"> Manage Trainers</a></li>
            <li><a href="javascript:void(0);" onclick="toggleContent('goers')"><img src="../assets/customer.png"> Manage Gym User</a></li>
            <li><a href="javascript:void(0);" onclick="toggleContent('report')"><img src="../assets/trainer.png"> Report</a></li>
            <li><a href="../login/logout_view.php"><img src="../assets/logout.png"> Logout</a></li>
        </ul>
    </div>

    <div class="main-content">

    <div class="form-container" id="gymForm">
            <form action="#" method="post">
                <label for="gym">Select among your gyms:</label>
                <select name="GymID" id="gym">
                    <?php
                    try{

                        identifyYourGym($conn, $_SESSION['userId']);


                    }

                    catch(Exception$e){
                
                    }
                    
                    ?>
                </select>
                <br><br>
                <input type="submit" value="View">
            </form>
  </div>


    <div id="trainers" class="table-container">
            <h1> Trainers information</h1>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>certification</th>
                        <th>specialization</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
               
                    <?php 

try {
   
    displayAllTrainers($conn, $gymid); 
    // Other operations that might throw exceptions
} catch (Exception $e) {
    
} 
   
                    

                    
                    
                    ?>
                </tbody>
            </table>
    </div>


    <div id="goers" class="table-container" style="display:none;">
            <h1>Gym goers information</h1>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Membership ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                
                    <?php 
                    
                    try{
                        
                        displayAllGoers($conn, $gymid);
                    
                    }
                    catch(Exception $e){


                    }
                    
                    ?>
                </tbody>
            </table>
        </div>
        <div id="report" class="main-content" style="display:none;">
            <h1>Gym Summary</h1>
            <div class="statistics">
                <!-- Summary Boxes -->
                <!-- Your summary boxes HTML content here -->
            </div>
        </div>
    </div>
    <button class="toggle-dark-mode" onclick="toggleDarkMode()"><i class="fas fa-moon"></i></button>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>


<script>


function suspendTrainer(user) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../action/suspend_trainer_action.php?user=" + user, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Handle successful response here
                console.log("Trainer suspended successfully.");
            } else {
                // Handle error response here
                console.error("Error: " + xhr.statusText);
            }
        }
    };
    xhr.send();
}

function revokeTrainer(user) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../action/revoke_trainer_action.php?user=" + user, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Handle successful response here
                console.log("Trainer revoked successfully.");
            } else {
                // Handle error response here
                console.error("Error: " + xhr.statusText);
            }
        }
    };
    xhr.send();
}

function approveTrainer(user) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../action/approve_trainer_action.php?user=" + user, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Handle successful response here
                console.log("Trainer approved successfully.");
            } else {
                // Handle error response here
                console.error("Error: " + xhr.statusText);
            }
        }
    };
    xhr.send();
}

function suspendGoer(user) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../action/suspend_goer_action.php?user=" + user, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Handle successful response here
                console.log("Goer suspended successfully.");
            } else {
                // Handle error response here
                console.error("Error: " + xhr.statusText);
            }
        }
    };
    xhr.send();
}

function revokeGoer(user) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../action/revoke_goer_action.php?user=" + user, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Handle successful response here
                console.log("Goer revoked successfully.");
            } else {
                // Handle error response here
                console.error("Error: " + xhr.statusText);
            }
        }
    };
    xhr.send();
}

function approveGoer(user) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../action/approve_goer_action.php?user=" + user, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Handle successful response here
                console.log("Goer approved successfully.");
            } else {
                // Handle error response here
                console.error("Error: " + xhr.statusText);
            }
        }
    };
    xhr.send();
}


function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
}

function toggleContent(id) {
    var elements = document.getElementsByClassName('table-container');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = 'none';
    }
    document.getElementById(id).style.display = 'block';
}

document.getElementById("gym").addEventListener("change", function() {
    document.getElementById("gymForm").submit();
});
</script>
</body>
</html>
