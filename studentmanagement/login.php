<?php
session_start();


?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student management system</title>
  </head>
  <body class="bdy" background="school2.jpg">

    <center>
        <div class="form_deg">
            <center class="title_the">
               <h1>Login Form</h1> 
            </center>
            <form class="login-form" action="#" method="post">
                <div>
                    <label class="lable_deg">username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="lable_deg">password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="login" name="login">
                </div>
            </form>
        </div>
    </center>   

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>

<?php
    

    include 'connect.php';

    if (isset($_POST['login'])) {

      $username=$_POST['username'];
      $password=$_POST['password'];  

      $sql=" select* from admin where username = '$username' and password='$password'";

      $query = mysqli_query($con,$sql);
      $row=mysqli_num_rows($query);

      if ($row) {
        echo "login success";
        $_SESSION['username'] = $username;
        header('location:adminhome.php');
      }else{
        echo "login faild";
        
        header('location:login.php');


      }

     
    
      
    

    
      
    }

?>