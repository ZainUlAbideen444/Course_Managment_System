<?php
include 'db.php';

if (isset($_POST['save_payment'])) {

    $course_name     = $_POST['course_name'];
    $amount          = $_POST['amount'];
    $payment_method  = $_POST['payment_method'];
    $payment_date    = $_POST['payment_date'];

    $query = "INSERT INTO payments (course_name, amount, payment_method, payment_date)
              VALUES ('$course_name', '$amount', '$payment_method', '$payment_date')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Payment added successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Training System</title>
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

<!-- FORM -->
<div class="form-wrapper">
  <form class="modern-form" method="POST" action="">
    <h2>Add Payment</h2>
    <p class="subtitle">Enter payment details</p>

    <div class="input-group">
      <input type="text" name="course_name" required>
      <label>Course Name</label>
    </div>

    <div class="input-group">
      <input type="number" name="amount" required>
      <label>Amount Paid</label>
    </div>

    <div class="input-group">
      <input type="text" name="payment_method" required>
      <label>Payment Method</label>
    </div>

    <div class="input-group">
      <input type="date" name="payment_date" required>
      <label></label>
    </div>

    <button type="submit" name="save_payment">Submit</button>
  </form>
</div>

</body>
</html>
