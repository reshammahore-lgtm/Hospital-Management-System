<?php
$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) die("Database connection failed.");

$stmt = $conn->prepare("INSERT INTO appointments (patient_name, phone, doctor, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $_POST['patient_name'], $_POST['phone'], $_POST['doctor'], $_POST['appointment_date'], $_POST['appointment_time']);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location: index.php");
exit;
?>
