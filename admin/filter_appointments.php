<?php
include('../db_con.php');

$data = json_decode(file_get_contents("php://input"), true);

$searchText = $data['searchText'] ?? '';
$timeSlot = $data['timeSlot'] ?? '';
$fromDate = $data['fromDate'] ?? '';
$toDate = $data['toDate'] ?? '';

$where = [];

if (!empty($searchText)) {
    $searchText = mysqli_real_escape_string($con, $searchText);
    $where[] = "(LOWER(name) LIKE '%$searchText%' OR LOWER(phone) LIKE '%$searchText%' OR LOWER(problem) LIKE '%$searchText%' OR LOWER(city_name) LIKE '%$searchText%' OR LOWER(disease) LIKE '%$searchText%')";
}
if (!empty($timeSlot)) {
    $where[] = "appointment_time = '".mysqli_real_escape_string($con, $timeSlot)."'";
}
if (!empty($fromDate)) {
    $where[] = "appointment_date >= '".mysqli_real_escape_string($con, $fromDate)."'";
}
if (!empty($toDate)) {
    $where[] = "appointment_date <= '".mysqli_real_escape_string($con, $toDate)."'";
}

$whereClause = '';
if (!empty($where)) {
    $whereClause = 'WHERE ' . implode(' AND ', $where);
}

$query = "SELECT * FROM book_appointement $whereClause ORDER BY appointment_date DESC";
$result = mysqli_query($con, $query);

$appointments = [];
while ($row = mysqli_fetch_assoc($result)) {
    $appointments[] = $row;
}

header('Content-Type: application/json');
echo json_encode($appointments);
