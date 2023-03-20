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

<?php
    

    include 'connect.php';

    $id=$_GET['id'];
    $show="select * from user where id={$id}";
    $showquery=mysqli_query($con,$show);
    $showres=mysqli_fetch_array($showquery);

    if (isset($_POST['submit'])) {
      $username=$_POST['username'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $password=$_POST['password'];


     
            $up="UPDATE `user` SET id='$id',
            username='$username',phone='$phone',email='$email',
            password='$password' WHERE id='$id'";

            $exi=mysqli_query($con,$up);

            if ($exi) {
                header('location:Viewstudents.php');
            }else{
                echo "fail";
            }
        }

?>

                <div>
                    <label>username</label>
                    <input type="text" name="username"  value="<?php echo $showres['username'];?>">
                </div>
                <div>
                    <label>phone</label>
                    <input type="password" name="phone" value="<?php echo $showres['phone'];?>">
                </div>
                <div>
                    <label>email</label>
                    <input type="text" name="email" value="<?php echo $showres['email'];?>">
                </div>
                <div>
                    <label>password</label>
                    <input type="password" name="password" value="<?php echo $showres['password'];?> ">
                </div>
                <div>


                <div>
                    <input class="btn btn-primary" type="submit" value="update" name="submit"><br><br>
                    
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

