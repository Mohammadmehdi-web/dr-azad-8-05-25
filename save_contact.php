<?php
if (isset($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['type'], $_POST['message'], $_POST['city'])) {
  
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $type = trim($_POST['type']);
    $message = trim($_POST['message']);
    $city = trim($_POST['city']);
    $added_date = date('Y-m-d H:i:s');

    if (empty($name) || empty($phone) || empty($email) || empty($type) || empty($message) || empty($city)) {
        echo 'error';
        exit;
    }
    include('db_con.php');

    $sql = "INSERT INTO contact (name, phone, email, type, message,city, added_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

  
    if ($stmt === false) {
        echo 'error: ' . $con->error;
        exit;
    }

    $stmt->bind_param("sssssss", $name, $phone, $email,$type, $message, $city, $added_date);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error: ' . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
