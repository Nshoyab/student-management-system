<?php
session_start();

if (!isset($_SESSION['username'])) {
     header('location:main.php');
}
?> 

<!doctype html>
<html lang="en">
  <head>

  <style>

   .div_deg  {
     background-color:skyblue;
     width:500px;
     padding-top:70px;
     padding-bottom:70px;

   }
    </style>
    <!-- Required meta tags -->
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student management system</title>
  </head>
  <body>

  <?php
    include 'admin-sidebar.php';
  ?>


<div class="content">
    <center>
        <br><br>

    <h1>Add Teacher</h1><br>


    <div class="div_deg">
        <form action="#" method="post" enctype="multipart/form-data">
            <div >
                <lable>Teacher Name :</lable>
                <input type="text" name="name">
            </div>
            <br>
            <div>
                <lable>Description :</lable>
                <textarea name="dicription"></textarea>
            </div>
            <br>
            <div >
                <lable>Image :</lable>
                <input type="file" name="image">
            </div>
            <br>
            <div >
            <input type="submit" name="submit" value="Add Teacher" class="btn btn-primary">
            </div>
        </form>
    </div>

    </center>
</div>





  
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>

<?php
    

    include 'connect.php';

    if (isset($_POST['submit'])) {
      $name=$_POST['name'];
      $dicription=$_POST['dicription'];

      $image = $_FILES['image']['name'];
      $tmp_name = $_FILES['image']['tmp_name'];

      $destination = "image/".$image;
      move_uploaded_file($tmp_name,$destination);

      $insert_teacher="INSERT INTO `teacher`(name,dicription,image) VALUES ('$name','$dicription','$image')";

       

       $insert_query = mysqli_query($con,$insert_teacher);

       if ($insert_query) {
         echo "inserted succesfully";
       }else{
         echo "not inserted";
       }



    

    }
    ?>
