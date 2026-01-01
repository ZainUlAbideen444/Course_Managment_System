<?php
include 'db.php';

if (isset($_POST['save_course'])) {

    $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
    $fee         = mysqli_real_escape_string($conn, $_POST['fee']);
    $duration    = mysqli_real_escape_string($conn, $_POST['duration']);

    $query = "INSERT INTO course (course_name, fee, duration)
              VALUES ('$course_name', '$fee', '$duration')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Course Added Successfully');</script>";
    } else {
        die(mysqli_error($conn)); // IMPORTANT
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Course</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>


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
  <form class="modern-form" method="POST" action="">
    <h2>Add Course</h2>
    <p class="subtitle">Enter course details carefully</p>

    <div class="input-group">
      <input type="text" name="course_name" required>
      <label>Course Name</label>
    </div>

    <div class="input-group">
      <input type="number" name="fee" required>
      <label>Fees</label>
    </div>

    <div class="input-group">
      <input type="text" name="duration" required>
      <label>Duration</label>
    </div>

    <button type="submit" name="save_course">Submit</button>
  </form>
</div>

</body>
</html>
