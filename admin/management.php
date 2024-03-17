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
    <!-- Sidebar -->
    <div class="sidebar">
        <h1>Gym Dashboard</h1>
        <ul>
            <li><a onclick="movegoers()"><img src="../assets/trainer.png"> Manage Trainers</a></li>
            <li><a onclick="movetrainers()"><img src="../assets/customer.png"> Manage Gym User</a></li>
            <li><a onclick="movetraingoers()"> <img src="../assets/trainer.png">Report</a></li>
            <li><a href="../login/logout_view.php"><img src="../assets/logout.png"> Account</a></li>
        </ul>
    </div>
    <div class="main-content">
        
        <!-- Table for Trainer Information -->
        <div id = "trainers" class="table-container"  >
            <h1> Trainers informations</h1>
            <table >
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data (replace with dynamic data from database) -->
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>
                            <button class="button">Suspend</button>
                            <button class="button">Revoke</button>


                        </td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Smith</td>
                        <td>
                            <button class="button">Remove</button>
                            <button class="button">Update</button>
                        </td>
                    </tr>
                    <!-- Additional rows for more trainers -->
                </tbody>
            </table>
             <!-- Table for Trainer Information -->
         

    </div>


    <div id = "goers" class="table-container"  >
        <h1> Gym goers information </h1>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>
                            <button class="button">Suspend</button>
                            <button class="button">Revoke</button>


                        </td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Smith</td>
                        <td>
                            <button class="button">Remove</button>
                            <button class="button">Update</button>
                        </td>
                    </tr>
                  
                </tbody>
            </table>

</div>

<div id = "report" class="main-content">
<h1>Gym Summary</h1>
    <div class = "statistics">
        
        <!-- Summary Boxes -->
        <div class="summary-box">
            <h2>Number of Trainers</h2>
            <p>10</p>
        </div>
        <div class="summary-box">
            <h2>Number of Gym Members</h2>
            <p>100</p>
        </div>
        <div class="summary-box">
            <h2>Active Members</h2>
            <p>80</p>
        </div>
        <div class="summary-box">
            <h2>Suspended Members</h2>
            <p>5</p>
        </div>
        <div class="summary-box">
            <h2>Pending Members</h2>
            <p>10</p>
        </div>
        <div class="summary-box">
            <h2>Revoked Members</h2>
            <p>5</p>
        </div>

</div>
</div>
    <button class="toggle-dark-mode" onclick="toggleDarkMode()">
        <i class="fas fa-moon"></i>
    </button>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
}

function movegoers(){

    var currenttable = document.getElementById("goers")
    var nexttable = document.getElementById("trainers")
    

    currenttable.style.display = "none"
    nexttable.style.display = ""


   

}


function movetrainers(){

var currenttable = document.getElementById("trainers")
var nexttable = document.getElementById("goers")
currenttable.style.display = "none"
nexttable.style.display = ""



}



</script>
</body>
</html>
