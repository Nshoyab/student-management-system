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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>student management system</title>
  </head>
  <body>

  <?php
    include 'admin-sidebar.php';
  ?>


 

<div class="contant">
    <center>

  <h1>Aplied for Admission</h1>
  <br><br>

  <table class="table" border="1px">
    <tr>
        <th style="padding:20px; font-size:15px;">Id</th>
        <th style="padding:20px; font-size:15px;">Name</th>
        <th style="padding:20px; font-size:15px;">Email</th>
        <th style="padding:20px; font-size:15px;">Phone</th>
        <th style="padding:20px; font-size:15px;">Message</th>
    </tr>

    <?php
   include 'connect.php';

   $select = "select*from  admossion ";
   $query= mysqli_query($con,$select);
   
   while($fetch = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td style="padding:20px;"><?php echo $fetch['id'];?></td>
      <td style="padding:20px;"><?php echo $fetch['Name'];?></td>
      <td style="padding:20px;"><?php echo $fetch['Email'];?></td>
      <td style="padding:20px;"><?php echo $fetch['Phone'];?></td>
      <td style="padding:20px;"><?php echo $fetch['Message'];?></td>
    </tr>
    <?php

   } 


?>
   
  </table>
</div>
</center>


  
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
