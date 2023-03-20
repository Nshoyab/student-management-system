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
    label {
    display: inline-block;
    text-align:right;
    width:100px;
    padding-top:10px;
    padding-bottom:10px;

   }
   .div_deg  {
     background-color:skyblue;
     width:400px;
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
<center>

<h1>Update Teacher Data</h1><br><br>


<div class="div_deg">
    <form action="#" method="post" enctype="multipart/form-data">

<?php
    

    include 'connect.php';

    $id=$_GET['id'];
    $show="select * from teacher where id={$id}";
    $showquery=mysqli_query($con,$show);
    $showress=mysqli_fetch_array($showquery);

    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $dicription=$_POST['dicription'];
  
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
  
        $destination = "image/".$image;
        move_uploaded_file($tmp_name,$destination);
  
        $up_teacher="UPDATE `teacher` SET `id`='$id',`name`='$name',
        `dicription`='$dicription',`image`='$image'
         WHERE id=$id";
  

         $update_query = mysqli_query($con,$up_teacher);
  
         if ($update_query) {
            header('location:ViewTeacher.php');
         }else{
           echo "not inserted";
         }

      }

?>


        <div >
            <lable>Teacher Name :</lable>
            <input type="text" name="name" value="<?php echo $showress['name']?>">
        </div>
        <br>
        <div>
            <lable>Description :</lable>
            <textarea name="dicription" value="<?php echo $showress['dicription']?>"></textarea>
        </div>
        <br>
        <div >
            <lable>Image :</lable>
            <input type="file" name="image"><br><br>
            <img width="70px" height="70px" class="teacher" src="<?php echo $showress['image']?>">
        </div>
        <br>
        <div >
        <input type="submit" name="submit" value="update" class="btn btn-primary">
        </div>
    </form>
</div>

</center> 



</center>





  
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>

