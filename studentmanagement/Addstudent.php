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
<center style="margin-top:80px;">
    <h1>Add Students</h1>

    <div  class="div_deg">


<form class="login-form" action="#" method="post">
                <div>
                    <label>username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label>phone</label>
                    <input type="password" name="phone">
                </div>
                <div>
                    <label>email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>password</label>
                    <input type="password" name="password">
                </div>
                <div>


                <div>
                    <input class="btn btn-primary" type="submit" value="add sudent" name="submit"><br><br>
                    
                </div>
            </form>
        </div>
        </div>
    </center>   



</center>





  
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>

<?php
    

    include 'connect.php';

    if (isset($_POST['submit'])) {
      $username=$_POST['username'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $password=$_POST['password'];



      $email_query="select*from user where email='$email'";
      $query=mysqli_query($con,$email_query);
      $run=mysqli_num_rows($query);
      if ($run>0) {
        ?>
        <script>
            alert("email is allready exist");
        </script>
        <?php
      }else{
            $insert="INSERT INTO `user`(`username`, `phone`, `email`, `password`) 
            VALUES ('$username','$phone','$email','$password')";

            $exi=mysqli_query($con,$insert);

            if ($exi) {
                ?>
                <script>
                    alert("inserted successfully");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("faild to insert");
                </script>
                <?php
            }
        }
      }

?>
