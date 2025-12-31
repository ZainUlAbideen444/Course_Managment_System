<?php
include 'db.php';

if (isset($_POST['save_student'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Student added successfully');window.location='add_student.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Student</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="nav-logo">Training System</div>
  <ul class="nav-links">
    <li><a href="add_student.php">Students</a></li>
    <li><a href="add_course.php">Courses</a></li>
    <li><a href="payment.php">Payments</a></li>
    <li><a href="index.php">Records</a></li>
  </ul>
</nav>

<!-- FORM WRAPPER -->
<div class="form-wrapper">
  <form class="modern-form" method="POST" action="">
    <h2>Add Student</h2>
    <p class="subtitle">Enter student details</p>

    <div class="input-group">
      <input type="text" name="name" required>
      <label>Student Name</label>
    </div>

    <div class="input-group">
      <input type="email" name="email" required>
      <label>Email Address</label>
    </div>

    <div class="input-group">
      <input type="text" name="phone" required>
      <label>Phone number</label>
    </div>

    <button type="submit" name="save_student">Submit</button>
  </form>
</div>

</body>
</html>
