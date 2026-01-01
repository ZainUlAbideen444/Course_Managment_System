<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAINING SYSTEM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   

<nav class="simple-nav">
  <a href="add_student.php">Students</a>
  <a href="add_course.php">Courses</a>
  <a href="payment.php">Payments</a>
  <a href="index.php">Records</a>
</nav>

<div class="hero">
  <div class="overlay"></div>
  <div class="content">
    <h1>Welcome to Training System</h1>
    <p>Manage students, courses and payments easily</p>
  </div>
</div>




<section class="cards-section">
  <h2>Enrolled Students</h2>

  <div class="cards-container">


    <div class="student-card">
      <h3>Shaheen Afridi</h3>
      <p><strong>Email:</strong> shafridi@gmail.com</p>
      <p><strong>Course:</strong> PHP & Laravel</p>
      <p><strong>Duration:</strong> 3 Months</p>
      <p class="amount">Paid: Rs 25,000</p>
    </div>

  
    <div class="student-card">
      <h3>Sania Mirza</h3>
      <p><strong>Email:</strong> sanaimirza@gmail.com</p>
      <p><strong>Course:</strong> Web Development</p>
      <p><strong>Duration:</strong> 6 Months</p>
      <p class="amount">Paid: Rs 40,000</p>
    </div>

 
    <div class="student-card">
      <h3>Babar Azam</h3>
      <p><strong>Email:</strong> babarazam@gmail.com</p>
      <p><strong>Course:</strong> Backend PHP</p>
      <p><strong>Duration:</strong> 2 Months</p>
      <p class="amount">Paid: Rs 18,000</p>
    </div>

  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>