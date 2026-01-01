<?php
include 'db.php';


$students = mysqli_query($conn, "SELECT * FROM students");
$courses  = mysqli_query($conn, "SELECT * FROM course");


if (isset($_POST['save_payment'])) {

    $student_id = $_POST['student_id'];
    $course_id  = $_POST['course_id'];
    $amount     = $_POST['amount'];
    $method     = $_POST['method'];
    $date       = $_POST['date'];

    $query = "INSERT INTO payments 
          (student_id, course_id, amount_paid, payment_method, payment_date)
          VALUES 
          ('$student_id', '$course_id', '$amount', '$method', '$date')";


    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Payment Added Successfully');</script>";
    } else {
        echo mysqli_error($conn);
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
<form class="modern-form" method="POST">

<h2>Add Payment</h2>
<p class="subtitle">Enter payment details carefully</p>

<div class="input-group">
  <select name="student_id" required>
    <option value="" disabled selected></option>
    <?php while($s = mysqli_fetch_assoc($students)) { ?>
      <option value="<?= $s['id']; ?>"><?= $s['name']; ?></option>
    <?php } ?>
  </select>
  <label>Select Student</label>
</div>

<div class="input-group">
  <select name="course_id" required>
    <option value="" disabled selected></option>
    <?php while($c = mysqli_fetch_assoc($courses)) { ?>
      <option value= ?><?= $c['course_name']; ?></option>
    <?php } ?>


  </select>
  <label>Select Course</label>
</div>

<div class="input-group">
  <input type="number" name="amount" required>
  <label>Amount Paid</label>
</div>

<div class="input-group">
  <input type="text" name="method" required>
  <label>Payment Method</label>
</div>

<div class="input-group">
  <input type="date" name="date" required>
  <label></label>
</div>

<button type="submit" name="save_payment">Submit</button>

</form>
</div>


</body>
</html>
