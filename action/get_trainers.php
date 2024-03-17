<?php
include("../setting/connection.php"); // Include database connection

// Get the selected class type from the request
$classType = $_GET['classType']; // Make sure to sanitize input

// Query the database to fetch available trainers based on the class type
$sql = "SELECT t.TrainerID, CONCAT(u.FirstName, ' ', u.LastName) AS TrainerName
        FROM Trainers t
        INNER JOIN Users u ON t.UserID = u.UserID
        INNER JOIN ClassSessions cs ON t.TrainerID = cs.TrainerID
        WHERE cs.ClassType = :classType";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':classType', $classType, PDO::PARAM_STR);
$stmt->execute();
$trainers = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Encode the array as JSON and return it
echo json_encode($trainers);
?>
