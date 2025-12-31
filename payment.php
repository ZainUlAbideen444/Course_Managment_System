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


<div class="form-wrapper">
  <form class="modern-form">
    <h2>Add Student</h2>
    <p class="subtitle">Enter payment details</p>

    <div class="input-group">
      <input type="text" required>
      <label>course name</label>
    </div>

    <div class="input-group">
      <input type="text" required>
      <label>amount paid</label>
    </div>
    <div class="input-group">
      <input type="text" required>
      <label>payment method</label>
    </div>
    <div class="input-group">
      <input type="date" required>
      <label></label>
    </div>

    <button>submit</button>

    <div class="in
