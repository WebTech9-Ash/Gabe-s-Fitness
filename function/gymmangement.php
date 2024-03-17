<?php
function identifyYourGym($conn, $userId){

    $sql = "SELECT GymID,GymName FROM Gyms where OwnerId =$userId";

    $result = mysqli_query($conn,$sql);

    if($result){

        $num_row= mysqli_num_rows($result);

        if($num_row!=0){


            while ($row = $result->fetch_assoc()) {
                $GymID = $row['GymID'];
                $GymName = $row['GymName'];
                echo "<option value='$GymID'>$GymName</option>";
             }
   
        }

        else{
            echo "<option value='-1'>you do not have a registered gym</option>";

        }

    }


}



function displayAllTrainers($conn,$gymid){

    $sql = "SELECT Users.UserID, Users.Firstname,Users.LastName, Trainers.Specialization, Trainers.Certification, Trainers.Status FROM 
Trainers INNER JOIN  Users ON Trainers.UserID = Users.UserID where Trainers.GymID = $gymid";


$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {

  $userId= $row['UserID'];
  $firstName = $row['Firstname'];
  $lastName = $row['LastName'];
  $certification = $row['Certification'];
  $specialization = $row['Specialization'];
  $status = $row['Status'];
  echo"<tr id = '$userId'>";
               echo"<td>$userId</td>";
               echo"<td>$firstName</td>";
               echo"<td>$lastName</td>";
               echo"<td>$certification </td>";
               echo" <td>$specialization</td>";
               echo"<td>$status</td>";
               echo"<td><button class='button' onclick = 'approveTrainer($userId)'>Approve</button><button class='button' onclick = 'suspendTrainer($userId)'>Suspend</button>
               <button class='button' onclick = 'revokeTrainer($userId)'>Revoke</button>
</td>";
                         
   echo"</tr>";}

}



function displayAllGoers($conn,$gymid){

    $sql = "SELECT Users.UserID, Users.Firstname,Users.LastName,Memberships.MembershipID, Memberships.Status FROM 
Memberships INNER JOIN  Users ON Memberships.UserID = Users.UserID where Memberships.GymID = $gymid";


$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {

  $userId= $row['UserID'];
  $membershipId = $row['MembershipID'];
  $firstName = $row['Firstname'];
  $lastName = $row['LastName'];
  $status = $row['Status'];
  
  echo"<tr id = '$userId'>";
               echo"<td>$userId</td>";
               echo"<td>$membershipId</td>";
               echo"<td>$firstName</td>";
               echo"<td>$lastName</td>";
               echo"<td>$status</td>";
               echo"<td><button class='button' onclick = 'approveGoer($userId)'>Approve</button><button class='button' onclick = 'suspendGoer($userId)'>Suspend</button>
               <button class='button' onclick = 'revokeGoer($userId)'>Revoke</button>
</td>";
                         
   echo"</tr>";}

}


function selectPeople($conn){

    $sql = "SELECT pid,lname,fname FROM People";
     $result = $conn->query($sql);

     while ($row = $result->fetch_assoc()) {
                 $pid = $row['pid'];
                 $fname = $row['fname'];
                 $lname = $row['lname'];
                 echo "<option value='$pid'>$fname   $lname </option>";
     }

    
    }
function suspendMembershipTrainer($conn, $userid){

    $sql = "UPDATE  Trainers SET status = 'Suspended' WHERE UserID =$userid";

    $result = $conn->query($sql);


}


function suspendMembershipGoer($conn,$userid){

    $sql = "UPDATE Memberships SET status = 'Suspended' WHERE UserID =$userid";
    $result = $conn->query($sql);



}


function revokeMembershipTrainer($conn,$userid){

    $sql = "UPDATE Trainers SET status = 'Revoked' WHERE UserID =$userid";
    $result = $conn->query($sql);



}

function approveMembershipTrainer($conn,$userid){

    $sql = "UPDATE Trainers SET status = 'Active' WHERE UserID =$userid";
    $result = $conn->query($sql);



}


function revokeMembershipGoer($conn,$userid){

    $sql = "UPDATE Memberships SET status = 'Revoked' WHERE UserID =$userid";
    $result = $conn->query($sql);





}


function approveMembershipGoer($conn,$userid){

    $sql = "UPDATE Memberships SET status = 'Active' WHERE UserID =$userid";
    $result = $conn->query($sql);



}





?>





