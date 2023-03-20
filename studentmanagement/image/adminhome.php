<!-- <?php
session_start();

if (!isset($_SESSION['username'])) {
     header('location:main.php');
}
?> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student management system</title>
  </head>
  <body>


  <header class="header">

   <a href="">Admin Dashboard</a>
   <div class="logout">
    <a href="logout.php" class="btn btn-primary">Logout</a>
   </div>
</header>


<aside>

  <div>
    <ul>
      <li>
        <a href="adminssion.php">Admission</a>
      </li>
      <li>
        <a href="Addstudent.php">Add Student</a>
      </li>
      <li>
        <a href="Viewstudents.php">View Students</a>
      </li>
      <li>
        <a href="AddTeacher.php">Add Teacher</a>
      </li>
      <li>
        <a href="ViewTeacher.php">View Teacher</a>
      </li>
      <li>
        <a href="">Add Cources</a>
      </li>
      <li>
        <a href="">View Cources</a>
      </li>
    </ul>
  </div>
</aside>

<div class="contant">

  <h1>Admin Dashboard</h1>
</div>



  
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>