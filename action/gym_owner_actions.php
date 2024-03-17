<?php

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



}

?>