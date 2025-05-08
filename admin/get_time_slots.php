<?php
include('../db_con.php'); // your database connection

$query = "SELECT DISTINCT appointment_time FROM book_appointement ORDER BY appointment_time ASC";
$result = mysqli_query($con, $query);

$timeSlots = [];
while ($row = mysqli_fetch_assoc($result)) {
    $timeSlots[] = $row['appointment_time'];
}

header('Content-Type: application/json');
echo json_encode($timeSlots);
?>
