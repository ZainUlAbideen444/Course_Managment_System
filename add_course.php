<?php
include 'db.php';

if (isset($_POST['save_course'])) {
    $course_name = $_POST['course_name'];
    $fee         = $_POST['fee'];
    $duration    = $_POST['duration'];

    $query = "INSERT INTO courses (course_name, fee, duration) VALUES ('$course_name', '$fee', '$duration')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Course added successfully');window.location='add_course.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
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
