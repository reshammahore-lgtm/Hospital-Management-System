<?php
$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) die("Database connection failed: " . $conn->connect_error);
$result = $conn->query("SELECT * FROM appointments ORDER BY appointment_date, appointment_time");
?>
<!DOCTYPE html>
<html>
<head>
<title>Hospital Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Hospital Management System</h1>
<p>Patient Appointment Portal</p>

<form action="book.php" method="POST">
<input name="patient_name" placeholder="Patient Name" required>
<input name="phone" placeholder="Phone Number" required>
<input name="doctor" placeholder="Doctor Name" required>
<input type="date" name="appointment_date" required>
<input type="time" name="appointment_time" required>
<button type="submit">Book Appointment</button>
</form>

<h2>Appointments</h2>
<table>
<tr><th>Patient</th><th>Phone</th><th>Doctor</th><th>Date</th><th>Time</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($row['patient_name']) ?></td>
<td><?= htmlspecialchars($row['phone']) ?></td>
<td><?= htmlspecialchars($row['doctor']) ?></td>
<td><?= htmlspecialchars($row['appointment_date']) ?></td>
<td><?= htmlspecialchars($row['appointment_time']) ?></td>
</tr>
<?php endwhile; ?>
</table>
</div>
</body>
</html>
