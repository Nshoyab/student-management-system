<!-- <?php
session_start();

if (!isset($_SESSION['username'])) {
     header('location:main.php');
}
?> -->

<!doctype html>
<html lang="en">
  <head>

  <style>
    .table_th{
        padding:20px;
        font-size:20px;
    }
    .table_td{
        background-color:skyblue;
        padding:20px;
    }
    </style>
    <!-- Required meta tags -->
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <!-- Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>student management system</title>
  </head>
  <body>

  <?php
    include 'admin-sidebar.php';
  ?>


 

<div class="contant">
    <center>

  <h1> Cource Data</h1>
  <br><br>

  <table border="1px">
    <tr>
        <th class="table_th">Teacher Name</th>
        <th class="table_th">Image</th>
        <th class="table_th">Delete</th>
        <th class="table_th">update</th>
    </tr>

    <?php
   include 'connect.php';

   $select = "select*from  cource ";
   $query= mysqli_query($con,$select);
   
   while($fetch = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td class="table_td"><?php echo $fetch['name'];?></td>
      <td class="table_td"><img height="100px" width="100px" src="<?php echo $fetch['image'];?> "></td>

      <td class="table_td"><button class="btn btn-danger" ><a style="color:white" href="Cdelete.php?id=<?php echo $fetch['id'];?>">Delete</a></button></td>
      <td class="table_td"><button class="btn btn-primary" ><a style="color:white" href="Cupdate.php?id=<?php echo $fetch['id'];?>">update</a></button></td>
      
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
