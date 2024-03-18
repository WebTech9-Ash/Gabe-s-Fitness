<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the 'userId' session variable
    include '../setting/connection.php';
    
    if(isset($_POST['gym-select'])) {
        $gymId = $_POST['gym-select'];
    } else {
?>
        <script>
            alert("Please select a gym.");
            // Redirect the user back to the previous page
            window.history.back();
        </script>
<?php
        exit(); // Stop further execution
    }
    
    $joinDate = date("Y-m-d");
    $expiryDate = date('Y-m-d', strtotime("+1 year"));

    $gymId = mysqli_real_escape_string($conn, $gymId);

    $query = "INSERT INTO Memberships (UserID, GymID, JoinDate, ExpiryDate) VALUES ('" . $_SESSION['userId'] . "', '$gymId', '$joinDate', '$expiryDate')";

    $result = mysqli_query($conn, $query);

    if ($result) {
?>
        <script>
            alert("Membership registered successfully.");
            // Redirect the user back to the previous page
            window.history.back();
        </script>
<?php
    } else {
?>
        <script>
            alert("Failed to register membership: <?php echo mysqli_error($conn); ?>");
            // Redirect the user back to the previous page
            window.history.back();
        </script>
<?php
    }

    mysqli_close($conn);
} else {
?>
    <script>
        alert("Failed to submit the form. Please try again.");
        // Redirect the user back to the previous page
        window.history.back();
    </script>
<?php
}
?>
