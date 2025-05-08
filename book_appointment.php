<?php

if (isset($_POST['name'], $_POST['phone'], $_POST['problem'], $_POST['city_name'], $_POST['disease'], $_POST['appointment_date'], $_POST['appointment_time'], $_POST['fees']))
{

    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $problem = trim($_POST['problem']);
    $city_name = trim($_POST['city_name']);
    $disease = trim($_POST['disease']);
    $appointment_date = trim($_POST['appointment_date']);
    $appointment_time = trim($_POST['appointment_time']);
    $fees = trim($_POST['fees']);
    $added_date = date('Y-m-d H:i:s');

    if (empty($name) || empty($phone) || empty($problem) || empty($city_name) || empty($disease) || empty($appointment_date) || empty($appointment_time) || empty($fees))
    {
        echo 'error: Please fill all fields';
        exit;
    }

    include('db_con.php');

    $sql = "INSERT INTO book_appointement (name, phone, problem, city_name, disease, appointment_date, appointment_time, fees, added_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt === false)
    {
        echo 'error: ' . $con->error;
        exit;
    }

    $stmt->bind_param("sssssssss", $name, $phone, $problem, $city_name, $disease, $appointment_date, $appointment_time, $fees, $added_date);

    if ($stmt->execute())
    {
        echo 'success';
    } else
    {
        echo 'error: ' . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>